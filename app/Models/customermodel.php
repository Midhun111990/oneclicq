<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class customermodel extends Model
{
    use HasFactory;



    public function viewcus($table,$cus)
    {
        
      return  DB::table($table)->where('email',$cus)->get();

    }


    public function viewcat($table)
    {
        
      return  DB::table($table)->get();

    }
    function viewproductcat($table,$table1,$id)
    {
      $data= DB::table($table)->join($table1,'product.catid','=','category.catid')->where('product.catid',$id)->where('product.status',1)->get();
 
        return $data;
 }
 public function viewpro($table,$catid)
    {
        
      return  DB::table($table)->get();

    }

    public function viewsinglecat($table,$id)
    {
        
      return  DB::table($table)->where('catid',$id)->get();

    }
    public function viewsingleproduct($table,$id)
    {
        
      return  DB::table($table)->where('pid',$id)->get();

    }

    public function cart($table,$table1,$table2,$id)
    {
        
      return  DB::table($table)->join($table1,'cart.productid','=','product.pid')->join($table2,'cart.customerid','=','user.userid')->where('customerid',$id)->get();

    }


    function addtocart($table,$data)
    {
        DB::table($table)->insert($data);

    }
    function cdetails($table,$data)

    {
        DB::table($table)->insert($data);

    }
    public function logcheck($table,$email,$pass)
    {
        
      return  DB::table($table)->where('email',$email)->where('password',$pass)->first();

    }















}