<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ProductController extends Controller
{
    public function addNewGiftCode()
    {
      if (Auth::user()->role == 1) {
        // code...
        $products = DB::table('products')->get();
        return view('addnewgiftcode',compact('products'));
      }else {
        return redirect('/');
      }
    }

    public function showAllProducts()
    {
      if (Auth::user()->role == 1) {
        // code...
        $products = DB::table('products')->get();
        return view('allcodes',compact('products'));
      }else {
        return redirect('/');
      }
    }
    public function buyshow(Request $request)
    {
      $selectedProduct = DB::table('products')->where('id', $request->id)->first();
      return view('buypage',compact('selectedProduct'));
    }
    public function checkoutRequest(Request $request)
    {
      $userID = DB::table('order')->insertGetId($request->except('_token'));
      return redirect('/notification')->with('userID', $userID);
    }
    public function ApproveRequest(Request $request)
    {
      if (Auth::user()->role == 1) {
        DB::table('order')->where('id', $request->id)->update([
          'status' => 1,
        ]);
      $userID =  DB::table('order')->where('id', $request->id)->value('user_id');
        return redirect('/sendCode')->with([
          'product_id' => $request->product_id,
          'user_id' => $userID,
        ]);
      }else {
        return redirect('/');
      }
    }
    public function addProduct(Request $request)
    {
      if (Auth::user()->role == 1) {
        // code...
        DB::table('products')->insert($request->except('_token'));
        return redirect('/showProducts')->with('success', 'Your new product has been created');
      }else {
        return redirect('/');
      }
    }
    public function Delete(Request $request)
    {
      if (Auth::user()->role == 1) {
        // code...
        DB::table('products')->where('id', $request->id)->delete();
        return redirect('/showProducts')->with('delete', 'Your product has been Deleted');
      }
    }
}
