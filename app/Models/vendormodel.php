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

    function busdetail($table,$id)
    {
        $data=DB::table($table)->where('id',$id)->get();
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

    



}
