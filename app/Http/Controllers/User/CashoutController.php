<?php

namespace App\Http\Controllers\User;

use App\Constants\Status;
use App\Models\CashOut;
use App\Models\User;
use App\Models\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CashoutController extends Controller
{
    public function cashOutForm(){

        $pageTitle = "Cash Out";
        $info = json_decode(json_encode(getIpInfo()), true);
        $mobileCode = @implode(',', $info['code']);
        $countries = json_decode(file_get_contents(resource_path('views/partials/country.json')));
        return view('user.service.cashout',compact('pageTitle','mobileCode','countries'));
    }

    public function cashOutStore(Request $request){

        $request->validate([
            'amount' => 'required|numeric|gt:0',
        ]);
        $fromUser = auth()->user();
        // check amount
        $amount = $request->amount;
        if($amount > $fromUser->balance){
            $notify[] = ['error','Doesn\'t have Sufficient balance'];
            return back()->withNotify($notify);
        }
        $general = gs();
        $trx = getTrx();
        //charge
        $charge = ($amount*$general->charge)/100;
        $agentUser = User::where('user_role', Status::AGENT)->where('mobile', $request->mobile_code .$request->mobile)->first();
        // check User
        if(!$agentUser){
            $notify[] = ['error', ' This user is not an Agent.'];
            return back()->withNotify($notify);
        }
        //check the operation is conflict or not
        if($fromUser->mobile == $request->mobile_code .$request->mobile){
            $notify[] = ['error', 'cash out error this input mobile number is yours!'];
            return back()->withNotify($notify);
        }
        
        $fromUser->balance -= $amount;
        $fromUser->balance -= $charge;
        $fromUser->save();

        $agentUser->balance += $amount;
        $agentUser->save();

        $cashOut = new CashOut();

        $cashOut->from_user = $fromUser->id;
        $cashOut->agent_user = $agentUser->id;
        $cashOut->amount = $request->amount;
        $cashOut->charge = $charge;
        $cashOut->transaction_number = $trx;
        $cashOut->save();

        $fromUsertransaction = new Transaction();

        $fromUsertransaction->user_id = $fromUser->id;
        $fromUsertransaction->amount = $amount;
        $fromUsertransaction->charge = $charge;
        $fromUsertransaction->post_balance = $fromUser->balance;
        $fromUsertransaction->trx_type = '-';
        $fromUsertransaction->trx =  $trx;
        $fromUsertransaction->details = 'Made a cashout to' .$agentUser->mobile;
        $fromUsertransaction->remark = 'cashout';
        $fromUsertransaction->save();

        $notifyTemplate = 'BAL_SUB';
        $notify[] = ['success', $general->cur_sym . $amount . ' Cash Out successfully to ' . $agentUser->fullname ];

        notify($fromUser, $notifyTemplate, [
            'trx' => $trx,
            'amount' => showAmount($amount),
            'remark' => $fromUsertransaction->remark,
            'post_balance' => showAmount($fromUser->balance)
        ]);

        $agentTransaction = new Transaction();

        $agentTransaction->user_id = $agentUser->id;
        $agentTransaction->amount = $amount;
        $agentTransaction->charge = 0;
        $agentTransaction->post_balance = $agentUser->balance;
        $agentTransaction->trx_type = '+';
        $agentTransaction->trx =  $trx;
        $agentTransaction->details = 'Send money from' .$fromUser->mobile;
        $agentTransaction->remark = 'Cash In';
        $agentTransaction->save();

        $notifyTemplate = 'BAL_ADD';
        $notify[] = ['success', $general->cur_sym . $amount . ' Cash Out successfully from ' . $fromUser->fullname ];


        notify($toUser, $notifyTemplate, [
            'trx' => $trx,
            'amount' => showAmount($amount),
            'remark' => $agentTransaction->remark,
            'post_balance' => showAmount($agentUser->balance)
        ]);

        return back()->withNotify($notify);

    }
}
