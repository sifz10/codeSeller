<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/playcardcode/usd', 'HomeController@usdCodePage')->name('usdPlayCode');
Route::get('/playcardcode/inr', 'HomeController@inrCodePage')->name('inrPlayCode');
Route::get('/AddPaymentMethod', 'HomeController@AddPaymentMethod')->name('AddPaymentMethod');
Route::post('/AddPaymentMethod', 'PaymentMethodController@AddPaymentMethod')->name('AddPaymentMethod');
Route::get('/DeletePaymentMethod/{id}', 'PaymentMethodController@DeletePaymentMethod')->name('DeletePaymentMethod');
Route::get('/showProducts', 'HomeController@showProducts')->name('showProducts');
Route::post('/addProduct', 'ProductController@addProduct')->name('addProduct');
Route::get('/deleteProduct/{id}', 'ProductController@Delete')->name('deleteProduct');

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard')->middleware('auth');
Route::get('/addNewGiftCode', 'ProductController@addNewGiftCode')->name('addNewGiftCode')->middleware('auth');
Route::post('/addNewGiftCodePost', 'GiftcodeController@AddGiftCode')->name('addNewGiftCodePost')->middleware('auth');
Route::post('/addNewGiftCodePost', 'GiftcodeController@AddGiftCode')->name('addNewGiftCodePost')->middleware('auth');
Route::get('/buy/{id}', 'ProductController@buyshow')->name('buy')->middleware('auth');
Route::get('/products/show/all', 'ProductController@showAllProducts')->name('showAllProducts')->middleware('auth');
Route::get('/users/all', 'HomeController@showAllUsers')->name('showAllUsers')->middleware('auth');
Route::get('/sold/product/all', 'HomeController@soldCodes')->name('soldCodes')->middleware('auth');
Route::get('/remaining/product/all', 'HomeController@RemainingCodes')->name('RemainingCodes')->middleware('auth');
// checkout page
Route::get('/checkout', 'HomeController@checkout')->name('checkout')->middleware('auth');
Route::post('/checkout', 'HomeController@checkout')->name('checkout')->middleware('auth');
Route::post('/checkout/request/', 'ProductController@checkoutRequest')->name('checkoutRequest')->middleware('auth');
//Buyrs Request
Route::get('/buyers-request', 'HomeController@buyersRequest')->name('buyersRequest')->middleware('auth');

Route::get('/notification', 'MailController@notification')->name('notification');
Route::get('/sendCode', 'MailController@sendCode')->name('sendCode');

Route::get('/ApproveRequest/{id}/{product_id}', 'ProductController@ApproveRequest')->name('ApproveRequest');
