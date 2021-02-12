<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      return view('home');
    }
    public function usdCodePage()
    {
      return view('usdStorePage');
    }
    public function inrCodePage()
    {
      return view('inrStorePage');
    }
    public function dashboard()
    {
      if (Auth::user()->role == 1) {
        return view('dashboard');
      }else {
        return redirect('/');
      }
    }
    public function AddPaymentMethod()
    {
      if (Auth::user()->role == 1) {
        // code...
        $paymentMethod = DB::table('payment_methods')->get();
        return view('AddPaymentMethod',compact('paymentMethod'));
      }else {
        return redirect('/');
      }
    }
    public function showAllUsers()
    {
      if (Auth::user()->role == 1) {
        // code...
        $users = DB::table('users')->get();
        return view('users',compact('users'));
      }else {
        return redirect('/');
      }
    }
    public function soldCodes()
    {
      if (Auth::user()->role == 1) {
        $soldCodes = DB::table('giftcodes')->where('status', 1)->get();
        return view('soldcodes',compact('soldCodes'));
        // code...
      }else {
        return redirect('/');
      }
    }
    public function RemainingCodes()
    {
      if (Auth::user()->role == 1) {
        // code...
        $RemainingCodes = DB::table('giftcodes')->where('status', 0)->get();
        return view('RemainingCodes',compact('RemainingCodes'));
      }else {
        return redirect('/');
      }
    }
    public function checkout(Request $request)
    {
      $productID = $request->product_id;
      if (empty($productID)) {
        return redirect('/');
      }else{
        $paymentMethod = $request->paymentMethod;
        $productID = $request->product_id;
        $AccountNumber = $request->account;
        $price = $request->price;
        return view('checkout',compact('paymentMethod','productID','AccountNumber','price'));
      }

    }
    public function buyersRequest(Request $request)
    {
      if (Auth::user()->role==1) {
        // code...
        $orders = DB::table('order')->where('status',0)->get();
        return view('buyrsRequest',compact('orders'));
      }else {
        return redirect('/');
      }
    }
    public function showProducts()
    {
      if (Auth::user()->role == 1) {
        // code...
        $product = DB::table('products')->get();
        return view('addNewProduct',compact('product'));
      }else {
        return redirect('/');
      }
    }

}
