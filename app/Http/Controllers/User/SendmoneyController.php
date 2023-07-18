<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
