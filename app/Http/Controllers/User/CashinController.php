<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use App\Models\CashIn;
use App\Constants\Status;

class CashinController extends Controller
{
    //
    public function cashInForm(){

        $pageTitle = "Cash In";
        $info = json_decode(json_encode(getIpInfo()), true);
        $mobileCode = @implode(',', $info['code']);
        $countries = json_decode(file_get_contents(resource_path('views/partials/country.json')));
        return view('user.service.cashin',compact('pageTitle','mobileCode','countries'));
    }

    public function cashInStore(Request $request){

        $request->validate([
            'amount' => 'required|gt:0|numeric',
        ]);
        $agentUser = auth()->user();
        if($agentUser->mobile == $request->mobile_code .$request->mobile){
            $notify[] = ['error','This input mobile number is yours!'];
            return back()->withNotify($notify);
        }
        $amount = $request->amount;
        if($amount > $agentUser->balance){
            $notify[] = ['error','Doesn\'t have sufficient balance '];
            return back()->withNotify($notify);
        }

        $toUser = User::where('mobile', $request->mobile_code .$request->mobile)->first();
        if(!$toUser){
            $notify[] = ['error','Not a registered User please register first!'];
            return back()->withNotify($notify);
        }
        if($toUser->user_role == Status::AGENT){
            $notify[] = ['error','Cash In not possible Agent to Agent'];
            return back()->withNotify($notify);
        }

        $general = gs();
        $trx= getTrx();

        $agentUser->balance -= $amount;
        $agentUser->save();
        
        $toUser->balance += $amount;
        $toUser->save();

        $cashIn = new CashIn();

        $cashIn->agent_user = $agentUser->id;
        $cashIn->to_user = $toUser->id; 
        $cashIn->amount = $request->amount; 
        $cashIn->transaction_number = $trx;
        $cashIn->save();
        
        
        $agentTransaction = new Transaction();

        $agentTransaction->user_id = $agentUser->id;
        $agentTransaction->amount = $amount;
        $agentTransaction->charge = 0;
        $agentTransaction->post_balance = $agentUser->balance;
        $agentTransaction->trx_type = '-';
        $agentTransaction->trx =  $trx;
        $agentTransaction->details = 'Made a cashin to ' .$toUser->mobile;
        $agentTransaction->remark = 'cashin';
        $agentTransaction->save();

        $notifyTemplate = 'BAL_SUB';
        $notify[] = ['success', $general->cur_sym . $amount . ' Cash In successfully to ' . $toUser->fullname ];

        notify($agentUser, $notifyTemplate, [
            'trx' => $trx,
            'amount' => showAmount($amount),
            'remark' => $agentTransaction->remark,
            'post_balance' => showAmount($agentUser->balance)
        ]);

        $toUserTransaction = new Transaction();

        $toUserTransaction->user_id = $toUser->id;
        $toUserTransaction->amount = $amount;
        $toUserTransaction->charge = 0;
        $toUserTransaction->post_balance = $toUser->balance;
        $toUserTransaction->trx_type = '+';
        $toUserTransaction->trx =  $trx;
        $toUserTransaction->details = 'Cash In from ' .$agentUser->mobile;
        $toUserTransaction->remark = 'Cash In';
        $toUserTransaction->save();

        $notifyTemplate = 'BAL_ADD';
        $notify[] = ['success', $general->cur_sym . $amount . ' Cash In successfully from ' . $agentUser->fullname ];


        notify($toUser, $notifyTemplate, [
            'trx' => $trx,
            'amount' => showAmount($amount),
            'remark' => $agentTransaction->remark,
            'post_balance' => showAmount($toUser->balance)
        ]);

        return back()->withNotify($notify);
    }
}
