<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class vendormodel extends Model
{
    use HasFactory;

    function insert($table,$data)
    {
        DB::table($table)->insert($data);

    }
 public function verifyVendor($table)
 {
    
  return DB::table($table)->latest('id')->first();

 }


 public function vendorname($table,$id)
    {
        
      return  DB::table($table)->where('id',$id)->get();

    }

 public function nocheck($table,$mobileno)
    {
        
      return  DB::table($table)->where('mob',$mobileno)->get();

    }

 public function otpcheck($table,$mobileno,$otp)
    {
        
      return  DB::table($table)->where('phone',$mobileno)->where('otp',$otp)->get();

    }

    public function logcheck($table,$email,$pass)
    {
        
      return  DB::table($table)->where('email',$email)->where('pass',$pass)->first();

    }
    function vdetails($table,$data)

    {
        DB::table($table)->insert($data);

    }

    function busdetail($table)
    {
        $data=DB::table($table)->get();
        return $data;

    }

    function bdetails($table,$data,$id)
    {
        DB::table($table)->where('id',$id)->update($data);
      
    }
   
    function prodetails($table,$data)
    {
        DB::table($table)->insert($data);

    }


    function viewp($table,$id)
    {
      $data= DB::table($table)->where('id',$id)->get();
      return $data;
    }

    
    function addproduct($table,$data)

    {
        DB::table($table)->insert($data);

    }

    public function viewbrand($table)
    {
        
      return  DB::table($table)->get();

    }

    public function viewsubcat($table)
    {
        
      return  DB::table($table)->get();

    }

    public function viewcat($table)
    {
        
      return  DB::table($table)->get();

    }
    public function viewbusiness($table)
    {
        
      return  DB::table($table)->get();

    }




    public function productdetails($table,$id)
    {
        
      return  DB::table($table)->where('vendorid',$id)->get();

    }
    
    public function vendet($table,$id)
    {
        
      return  DB::table($table)->where('id',$id)->get();

    }
    
    
    public function vendetails($table,$id)
    {
        
      return  DB::table($table)->where('id',$id)->get();

    }


    function viewsingleproduct($table,$id)
    {
       $data=DB::table($table)->where('pid',$id)->get();
        return $data;
    }







}
