<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SmsController extends Controller
{

    public function sms(Request  $request)
    {
        $phone=$request->get('phone');
       $password=mt_rand(10000000,99999999);
       $new_password=Hash::make($password);
       if(User::where('phone','=',$phone)->count() >0){
           $basic  = new \Nexmo\Client\Credentials\Basic('fec7a732', '8OrqIBwRSAN8pZQ0');
           $client = new \Nexmo\Client($basic);

           $message = $client->message()->send([
               'to' => '905353035623',
               'from' => 'Vonage APIs',
               'text' => 'Şifreniz:'.$password.'olarak değiştirildi.'
           ]);
           User::where('phone',$phone)->update(['password'=>$new_password]);
           return view('login')->with('success','mesaj iletildi.');

       }



    }


}
