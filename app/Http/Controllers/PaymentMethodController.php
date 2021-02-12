<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Image;

class PaymentMethodController extends Controller
{
    public function AddPaymentMethod(Request $request)
    {
       $randomNumber =rand();
       $logo = $request->file('logo');
       $logo_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
       $newLocation = base_path('./public/uploads/'.$logo_rename);
       Image::make($logo)->resize(199, 100)->save($newLocation,100);
       DB::table('payment_methods')->insert([
         'paymentMethod' => $request->paymentMethod,
         'AccountNumber' => $request->AccountNumber,
         'logo' => $logo_rename,
         'created_at' => Carbon::now(),
       ]);
      return redirect('/AddPaymentMethod')->with('success', 'Your are added the payment method!');
    }
    public function DeletePaymentMethod(Request $request)
    {
      DB::table('payment_methods')->where('id' , $request->id)->delete();
      return redirect('/AddPaymentMethod')->with('delete', 'Your are deleted the payment method!');
    }
}
