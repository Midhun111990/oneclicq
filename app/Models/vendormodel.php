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
    public function mytotalproduct($table,$id)
    {
      $data=DB::table($table)->where('vendorid','=',$id)->get();
      return $data->count();
       
   //condition remaining
    }



    function modifyinfo($table,$data,$id)
    {
        DB::table($table)->where('id',$id)->update($data);
      
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
        
      $data= DB::table($table)->where('phone',$mobileno)->where('otp',$otp)->first();
      return $data;
      // $count=$data->count();
// if($count==0)
// {
//  return false; 
// }
// else
// {
//   return $data;
// }

    }

    public function logcheck($table,$email,$pass)
    {
        
      return  DB::table($table)->where('email',$email)->where('pass',$pass)->first();

    }
    public function stockcheck($table,$name,$price)
    {
        
      $data=DB::table($table)->where('name',$name)->where('price',$price)->first();
      return $data;
      
    }
    
    public function updatestock($table,$stock,$stockinc)
    {
      DB::table($table)->where('pid',$stockinc)->increment('stockunit',$stock);
    }

    function  approvedproduct($table,$id)
    {
       $data=DB::table($table)->where('status',1)->where('vendorid','=',$id)->get();
        return $data;
    
    }
    
    function  penproduct($table,$id)
    {
       $data=DB::table($table)->where('status',0)->where('vendorid','=',$id)->get();
        return $data;
    
}

    
    function vdetails($table,$data)

    {
        DB::table($table)->insert($data);

    }
    function busdet($table)
    {
        $data=DB::table($table)->get();
        return $data;

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
   
    function deletepro($table,$id)
    {
        DB::table($table)->where('pid',$id)->delete();
    }
    
    function updateproduct($table,$data,$id)
    {
        DB::table($table)->where('pid',$id)->update($data);
      
    }



    function prodetails($table,$data)
    {
        DB::table($table)->insert($data);

    }


    function showcatname($table,$table1,$table2,$id)
    {
      $data= DB::table($table)->join($table1,'product.catid','=','category.catid')->join($table2,'product.subcatid','=','subcategory.subcatid')->where('product.pid',$id)->get();
      return $data;
    }

  

    function viewp($table,$id)
    {
      $data= DB::table($table)->where('id',$id)->get();
      return $data;
    }

    function selectDataById($table,$id)
    {
      $data= DB::table($table)->where('catid',$id)->get();
      return $data;
    }

    
    function addproduct($table,$data)

    {
        DB::table($table)->insert($data);

    }

    function addoffer($table,$data)

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
    

    public function offerresult($table,$table1,$id)
    {
        
      return  DB::table($table)->join($table1,'offer.productid','=','product.pid')->get();

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
