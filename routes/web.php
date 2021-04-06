<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\vendorcontroller;
use App\Http\Controllers\customercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */
// Route::get('/customer', [customercontroller::class,'customerindex']);


Route::get('/admin', [admincontroller::class,'adminindex']);
Route::get('/vendorsinformation', [admincontroller::class,'vinfo']);
Route::get('/catinformation', [admincontroller::class,'catinfo']);
Route::post('/addcat', [admincontroller::class,'addcat']);

Route::get('/subcatinformation', [admincontroller::class,'subcatinfo']);
Route::post('/addsubcat/{id}', [admincontroller::class,'addsubcat']);

Route::get('/subcatinformation/{id}', [admincontroller::class,'subcatinfo']);



Route::get('/brandinformation', [admincontroller::class,'brandinfo']);
Route::post('/addbrand', [admincontroller::class,'addbrand']);

Route::get('/businessinformation', [admincontroller::class,'businessinfo']);
Route::post('/addbusiness', [admincontroller::class,'addbusiness']);



Route::get('/viewvendordetail/{id}', [admincontroller::class,'viewvendetail']);

Route::post('/approved/{id}', [admincontroller::class,'approved']);






Route::get('/', [vendorcontroller::class,'vendorsignin']);
Route::get('/vendorRegister', [vendorcontroller::class,'vendorlog']);
Route::post('/signin', [vendorcontroller::class,'vendorsignin']);

Route::get('/logincheck', [vendorcontroller::class,'/logincheck']);
Route::post('/vendorotp', [vendorcontroller::class,'vendorotp']);
Route::get('/vendorVerify', [vendorcontroller::class,'verifyotp']);
Route::post('/otpcheck', [vendorcontroller::class,'otpcheck']);
Route::get('/vendordetails', [vendorcontroller::class,'vendordetails']);
Route::post('/businessdetails/{id}', [vendorcontroller::class,'businessdetails']);
Route:: get('/vendorbody',[vendorcontroller::class,'vendorbody']);

Route:: get('/vendorproduct',[vendorcontroller::class,'vendorproduct']);
Route:: get('/viewproduct/{id}',[vendorcontroller::class,'viewproduct']);
Route:: post('/addproduct/{id}',[vendorcontroller::class,'addproduct']);
    




Route::get('/customer', [customercontroller::class,'customerindex']);
