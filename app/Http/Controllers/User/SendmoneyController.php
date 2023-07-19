<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SendMoney;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class SendmoneyController extends Controller
{
    //
    public function sendMoneyForm(){
        $pageTitle = "Send Money";
        $info = json_decode(json_encode(getIpInfo()), true);
        $mobileCode = @implode(',', $info['code']);
        $countries = json_decode(file_get_contents(resource_path('views/partials/country.json')));
        return view('user.service.sendmoney',compact('pageTitle','mobileCode','countries'));
    }

    public function sendMoneyStore(Request $request){

        $request->validate([
            'amount'=> 'required|numeric|gt:0',
        ]);

        $fromUser = auth()->user();
        $toUser = User::where('mobile', $request->mobile_code .$request->mobile)->first();
        $amount = $request->amount;
        $general = gs();
        $trx = getTrx();

        //percent
        $charge = ($amount*$general->charge)/100;

        $fromUser->balance -= $amount;
        $fromUser->balance -= $charge;
        $fromUser->save();

        $toUser->balance += $amount;
        $toUser->save();

        //balance check
        if($amount > $fromUser->balance){
            $notify[] = ['error', ' doesn\'t have Sufficent balance.'];
            return back()->withNotify($notify);
        }
        //user check user is valid or not
        if(!$toUser){
            $notify[] = ['error', ' doesn\'t have registered User. Please register first.'];
            return back()->withNotify($notify);
        }
        //check the operation is conflict or not
        if($fromUser->mobile == $request->mobile_code .$request->mobile){
            $notify[] = ['error', 'Send Money Error this input mobile number is yours!'];
            return back()->withNotify($notify);
        }

        $sendMoney = new SendMoney();

        $sendMoney->from_user = $fromUser->id;
        $sendMoney->to_user = $toUser->id;
        $sendMoney->amount = $request->amount;
        $sendMoney->charge = $charge;
        $sendMoney->transection_number = $trx;
        $sendMoney->save();

        $fromUsertransaction = new Transaction();

        $fromUsertransaction->user_id = $fromUser->id;
        $fromUsertransaction->amount = $amount;
        $fromUsertransaction->charge = $charge;
        $fromUsertransaction->post_balance = $fromUser->balance;
        $fromUsertransaction->trx_type = '-';
        $fromUsertransaction->trx =  $trx;
        $fromUsertransaction->details = 'Made a sendmoney to' .$toUser->mobile;
        $fromUsertransaction->remark = 'sendmoney';
        $fromUsertransaction->save();

        $notifyTemplate = 'BAL_SUB';
        $notify[] = ['success', $general->cur_sym . $amount . ' Send Money successfully to ' . $toUser->fullname ];

        notify($fromUser, $notifyTemplate, [
            'trx' => $trx,
            'amount' => showAmount($amount),
            'remark' => $fromUsertransaction->remark,
            'post_balance' => showAmount($fromUser->balance)
        ]);

        $toUsertransaction = new Transaction();

        $toUsertransaction->user_id = $toUser->id;
        $toUsertransaction->amount = $amount;
        $toUsertransaction->charge = 0;
        $toUsertransaction->post_balance = $toUser->balance;
        $toUsertransaction->trx_type = '+';
        $toUsertransaction->trx =  $trx;
        $toUsertransaction->details = 'Send money from' .$fromUser->mobile;
        $toUsertransaction->remark = 'Cash In';
        $toUsertransaction->save();

        $notifyTemplate = 'BAL_ADD';
        $notify[] = ['success', $general->cur_sym . $amount . ' Send Money successfully from ' . $fromUser->fullname ];


        notify($toUser, $notifyTemplate, [
            'trx' => $trx,
            'amount' => showAmount($amount),
            'remark' => $toUsertransaction->remark,
            'post_balance' => showAmount($toUser->balance)
        ]);

        return back()->withNotify($notify);

    }
}
