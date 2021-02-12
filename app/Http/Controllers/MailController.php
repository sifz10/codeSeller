<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\DB;
use Auth;


class MailController extends Controller
{
    public function notification()
    {
      $k = session('userID');
      $user_id = DB::table('order')->where('id', $k)->value('user_id');
      $Email = DB::table('users')->where('id', $user_id)->value('email');
      $details = [
        'body' => "Hey admin, Congratulation you just got a new order on your website",
      ];
      $userNote =[
        'body' => "Hello Customer, Thank you for your order. We are reviewing your payment. You will get the code via E-Mail in just 2 min!",
      ];
      \Mail::to('codegift896@gmail.com')->send(new \App\Mail\adminNotify($details));
      \Mail::to($Email)->send(new \App\Mail\UserNotify($userNote));
      return redirect('/');
    }

    public function sendCode(Request $request)
    {
      $a = session('product_id');
      $l = session('user_id');
      $user_email = DB::table('users')->where('id', $l)->value('email');

      if (empty($a)) {
        return redirect('buyers-request')->with('danger', 'Somthings Wrong!');
      }
       $product = DB::table('products')->where('id', $a)->first();
       if ($product->quantity <= 0) {
         return redirect('buyers-request')->with('danger', 'Out of stock!');
       }
       $newQuantity = DB::table('products')->where('id', $a)->update(['quantity' => $product->quantity-1 ]);
       $code = DB::table('giftcodes')->where('status',0)->where('giftCodeType', $product->id)->first();
      $codes = [
        'code' => $code->giftCode,
      ];
      \Mail::to($user_email)->send(new \App\Mail\SendCode($codes));
      // Updated the code as sold
      DB::table('giftcodes')->where('id', $code->id)->update([
        'status' => 1,
      ]);
      return redirect('buyers-request')->with('success', 'You just approved a payment request!');
    }
}
