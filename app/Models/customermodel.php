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
        
     $data=  DB::table($table)->where('email',$cus)->get()->unique('name');

     return $data;
     }



    public function viewcat($table)
    {
        
      return  DB::table($table)->get();

    }
    function viewproductcat($table,$table1,$table2,$id)
    {
      $data= DB::table($table)->join($table1,'product.catid','=','category.catid')->join($table2,'product.subcatid','=','subcategory.subcatid')->where('product.catid',$id)->where('product.status',1)->get()->unique('subcatid');
 
        return $data;
 }
 function viewproductcats($table)
 {
   $data= DB::table($table)->get();

     return $data;
}


 function viewproductsubcat($table,$table1,$id)
    {
      $data= DB::table($table)->join($table1,'product.subcatid','=','subcategory.subcatid')->where('product.subcatid',$id)->where('product.status',1)->get();
 
        return $data;
 }


 function viewofferprice($table,$id)
    {
      $data= DB::table($table)->where('productid','=',$id)->get();
 
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
      public function viewfeedback($table,$table1,$id)
    {
        
      return  DB::table($table)->join($table1,'product.pid','=','feedback.productid')->where('pid',$id)->get();

    }

    
    
    public function viewpoint($table,$table1,$cus)
    {
        
    
      $data= DB::table($table)->join($table1,'point.userid','=','user.userid')->where('email','=',$cus)->get();
    
    
      $data=DB::table($table)->join($table1,'point.userid','=','user.userid')->select( DB::raw('SUM(points) as points'))->where('email','=',$cus)->get();
    


     return $data;
     
      
    
    }

    
    
    
    
    public function cart($table,$table1,$table2,$id)
    {
        
      return  DB::table($table)->join($table1,'cart.productid','=','product.pid')->join($table2,'cart.customerid','=','user.userid')->where('customerid',$id)->get();

    }


    function addtocart($table,$data)
    {
        DB::table($table)->insert($data);

    }


    function addtoorder($table,$data)
    {
        DB::table($table)->insert($data);

    }



    function addtofeedback($table,$data)
    {
        DB::table($table)->insert($data);

    }





    function points($table,$data)
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


    function updatepointtouser($table,$data1,$id)
    {
      
        DB::table($table)->where('userid',$id)->update($data1);
      
    }















}