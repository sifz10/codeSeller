<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GiftcodeController extends Controller
{
    public function AddGiftCode(Request $request)
    {
      DB::table('giftcodes')
      ->insert([
        "giftCodeType" =>$request->CodeType,
        "giftCode" =>$request->GiftCode,
        "created_at" =>Carbon::now(),
      ]);
      $productQuantity =  DB::table('products')->where('id', $request->CodeType)->value('quantity');
      DB::table('products')->where('id', $request->CodeType)->update([
        'quantity' => $productQuantity+1,
      ]);
      return redirect('addNewGiftCode')->with('status', 'Gift Code Has Been Uploaded!');
    }
}
