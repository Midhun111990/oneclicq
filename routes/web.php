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











//ADMIN

Route::get('/A', [admincontroller::class,'aindex']);
Route::post('/asignin', [admincontroller::class,'asignin']);



Route::get('/admin', [admincontroller::class,'adminindex']);
Route::get('/vendorsinformation', [admincontroller::class,'vinfo']);
Route::get('/offerinformation', [admincontroller::class,'ofinfo']);

Route::get('/approveofferinformation/{id}', [admincontroller::class,'approveoffer']);
Route::post('/approveoffer/{id}', [admincontroller::class,'approverejectoffer']);

Route::get('/rejectoffer/{id}', [admincontroller::class,'rejectoffer']);
Route::post('/rejecttheoffer/{id}', [admincontroller::class,'offerreason']);


Route::get('/catinformation', [admincontroller::class,'catinfo']);
Route::post('/addcat', [admincontroller::class,'addcat']);

Route::get('/deletecatinformation/{id}', [admincontroller::class,'deletecatinformation']);
Route::get('/singlecatinformation/{id}', [admincontroller::class,'singlecatinformation']);


Route::get('/deletebrandinformation/{id}', [admincontroller::class,'deletebrandinformation']);
Route::get('/singlebrandinformation/{id}', [admincontroller::class,'singlebrandinformation']);

Route::post('/updatebrandinformation/{id}', [admincontroller::class,'updatebrandinformation']);

Route::post('/productresponse/{id}', [admincontroller::class,'productresponse']);



Route::get('/singlesubcatinformation/{id}', [admincontroller::class,'singlesubcatinformation']);

Route::post('/updatesubcatinformation/{id}', [admincontroller::class,'updatesubcatinformation']);


Route::post('/updatecatinformation/{id}', [admincontroller::class,'updatecatinformation']);


Route::get('/rejectproduct/{id}', [admincontroller::class,'rejectproduct']);


Route::post('/rejecttheproduct/{id}', [admincontroller::class,'productreason']);





Route::get('/subcatinformation', [admincontroller::class,'subcatinfo']);
Route::post('/addsubcat/{id}', [admincontroller::class,'addsubcat']);

Route::get('/subcatinformation/{id}', [admincontroller::class,'subcatinfo']);


Route::get('/deletesubcatinformation/{id}', [admincontroller::class,'deletesubcatinformation']);


Route::get('/deletebusiness/{id}', [admincontroller::class,'deletebusiness']);



Route::get('/brandinformation', [admincontroller::class,'brandinfo']);
Route::post('/addbrand', [admincontroller::class,'addbrand']);

Route::get('/businessinformation', [admincontroller::class,'businessinfo']);
Route::post('/addbusiness', [admincontroller::class,'addbusiness']);



Route::get('/viewvendordetail/{id}', [admincontroller::class,'viewvendetail']);

Route::get('/productinformation', [admincontroller::class,'productinformation']);

Route::post('/approved/{id}', [admincontroller::class,'approved']);

Route::post('/proapproved/{id}', [admincontroller::class,'proapproved']);

Route::get('/adminsingleproductinformation/{id}', [admincontroller::class,'viewmyinfo']);

Route::get('/pendingproduct', [admincontroller::class,'pendingproduct']);

Route::get('/approvedproduct', [admincontroller::class,'approvedproduct']);


Route::get('/rejectapplication/{id}', [admincontroller::class,'rejectapplication']);

Route::post('/rejectapp/{id}', [admincontroller::class,'rejectapp']);







//VENDOR

Route::post('/modify/{id}', [vendorcontroller::class,'modifyinfo']);


Route::get('/V', [vendorcontroller::class,'index']);
Route::get('/searchproduct', [vendorcontroller::class,'searchproduct']);

Route::get('/searchproductof', [vendorcontroller::class,'searchproductof']);

Route::get('/offeredproduct', [vendorcontroller::class,'offeredproduct']);


Route::get('/vendorRegister', [vendorcontroller::class,'vendorlog']);
Route::post('/signin', [vendorcontroller::class,'vendorsignin']);

Route::get('/vendorforgot', [vendorcontroller::class,'vendorpassforgot']);

Route::post('/vendorforgot', [vendorcontroller::class,'vendorforgot']);

Route::get('/logincheck', [vendorcontroller::class,'/logincheck']);
Route::post('/vendorotp', [vendorcontroller::class,'vendorotp']);
Route::get('/vendorVerify', [vendorcontroller::class,'verifyotp']);
Route::post('/otpcheck', [vendorcontroller::class,'otpcheck']);
Route::get('/vedetails', [vendorcontroller::class,'vedetails']);

Route::get('/vendordetails', [vendorcontroller::class,'vendordetails']);


Route::get('/busdetail', [vendorcontroller::class,'busdetail']);


Route::get('/venbody', [vendorcontroller::class,'venbody']);




Route::post('/businessdetails/{id}', [vendorcontroller::class,'businessdetails']);
Route:: get('/vendorbody',[vendorcontroller::class,'vendorbody']);

Route:: get('/vendorproduct',[vendorcontroller::class,'vendorproduct']);

Route:: get('/comment',[vendorcontroller::class,'comment']);


Route:: get('/vendoroffer',[vendorcontroller::class,'vendoroffer']);


Route::get('/vendorsingleproductinformation/{id}', [vendorcontroller::class,'viewmyinformation']);

Route::get('/vendorsingleofferinformation/{id}', [vendorcontroller::class,'viewmyofferinformation']);

Route::get('/vendorupdateofferinformation/{id}', [vendorcontroller::class,'updateoffer']);



Route:: post('/updateoffer/{id}',[vendorcontroller::class,'updateofferinformation']);



Route:: get('/viewproduct/{id}',[vendorcontroller::class,'viewproduct']);

Route:: get('/prdSubCat/{id}',[vendorcontroller::class,'viewsubproduct']);


Route:: post('/addproduct/{id}',[vendorcontroller::class,'addproduct']);

Route:: post('/updateproduct/{id}',[vendorcontroller::class,'updateproduct']);

Route:: get('/deleteproduct/{id}',[vendorcontroller::class,'deleteproduct']);




Route:: post('/addoffer',[vendorcontroller::class,'addoffer']);

Route:: get('/deleteoffer/{id}',[vendorcontroller::class,'deleteoffer']);


Route:: get('/myinformation/{id}',[vendorcontroller::class,'myinformation']);
    
Route:: get('/logout',[vendorcontroller::class,'logout']);


Route::get('/pendingproduct/{id}', [vendorcontroller::class,'pendingproduct']);

Route::get('/approvedproduct/{id}', [vendorcontroller::class,'approvedproduct']);

Route::get('/vsingleproductinformation/{id}', [vendorcontroller::class,'viewmyinfo']);




// Route:: get('/viewbusiness/{id}',[vendorcontroller::class,'viewbusiness']);


Route::get('/ordertable', [vendorcontroller::class,'ordertable']);


Route::get('/vendorsinglecustomerinformation/{id}', [vendorcontroller::class,'customerdetail']);








//CUSTOMER


Route::get('/customer', [customercontroller::class,'customerindex']);

Route::get('/productshow/{id}', [customercontroller::class,'productshow']);

Route::get('/showbysubcat/{id}', [customercontroller::class,'showbysubcat']);

Route::get('/singleproductshow/{id}', [customercontroller::class,'singleproductshow']);

Route::get('/customerlog',[customercontroller::class,'customerlog']);

Route::get('/customerregistration',[customercontroller::class,'customerregistration']);

Route::post('/customerdatasave',[customercontroller::class,'customerdatasave']);


Route::post('/customersignin',[customercontroller::class,'customersignin']);

Route:: post('/addtocart/{id}',[customercontroller::class,'addtocart']);


Route::post('/productaddtocart/{id}', [customercontroller::class,'productaddtocart']);


Route:: get('/mycart/{id}',[customercontroller::class,'mycart']);

Route:: get('/logoutcus',[customercontroller::class,'logoutcus']);



Route::post('/updateorderpoint/{id}', [customercontroller::class,'updateorderpoint']);

Route::get('/search', [customercontroller::class,'searchpro']);


Route:: get('/reducecoin/{id}',[customercontroller::class,'pointreduce']);
