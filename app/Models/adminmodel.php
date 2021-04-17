<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class adminmodel extends Model
{
    use HasFactory;


    function selectvinfo($table)
    {
       $data=DB::table($table)->get();
        return $data;
    }
    function selectveninfo($table,$id)
    {
       $data=DB::table($table)->where('id',$id)->get();
        return $data;
    }
    function approved($table,$data,$id)
    {
        DB::table($table)->where('id',$id)->update($data);
      
    }
    function catdetails($table)
    {
        $data=DB::table($table)->get();
        return $data;
      
    }
    function subcatdetails($table,$id)
    {
        $data=DB::table($table)->where('catid',$id)->get();
        return $data;
      
    }
    function branddetails($table)
    {
        $data=DB::table($table)->get();
        return $data;
      
    }


    function addcatinfo($table,$data)
    {
        DB::table($table)->insert($data);

    }
    function addsubcatinfo($table,$data)
    {
        DB::table($table)->insert($data);

    }
    public function mytotalproduct($table)
    {
      $data=DB::table($table)->get();
      return $data->count();
       
   //condition remaining
    }
    public function mytotalvendor($table)
    {
      $data=DB::table($table)->where('adminstatus',2)->get();
      return $data->count();
       
   //condition remaining
    }
    public function myvproduct($table)
    {
      $data=DB::table($table)->where('status',1)->get();
      return $data->count();
       
   //condition remaining
    }

   function catnamecall($table,$id)
    {
        $data=DB::table($table)->where('catid',$id)->get();
     return $data;   

       }

       function subcatinformation($table,$id)
       {
           $data=DB::table($table)->where('subcatid',$id)->get();
        return $data;   
   
          }
   
    

    function addbrandinfo($table,$data)
    {
        DB::table($table)->insert($data);

    }
   
    function addbusinessinfo($table,$data)
    {
        DB::table($table)->insert($data);

    }



    function businessdetails($table)
    {
        $data=DB::table($table)->get();
        return $data;
      
    }
    function proinformation($table)
    {
       $data=DB::table($table)->get();
        return $data;
    }
    function viewsingleproduct($table,$id)
    {
       $data=DB::table($table)->where('pid',$id)->get();
        return $data;
    }

    function proapproved($table,$data,$id)
    {
        DB::table($table)->where('pid',$id)->update($data);
      
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
    function  penproduct($table)
    {
       $data=DB::table($table)->where('status',0)->get();
        return $data;
    
}
   
function deletebrand($table,$id)
{
    DB::table($table)->where('brandid',$id)->delete();
}

function deletebus($table,$id)
{
    DB::table($table)->where('id',$id)->delete();
}

function deletecat($table,$id)
{
    DB::table($table)->where('catid',$id)->delete();
}

function deletesubcat($table,$id)
{
    DB::table($table)->where('subcatid',$id)->delete();
}


public function updatecat($table,$data,$id)
    {
        DB::table($table)->where('catid',$id)->update($data);
     
    }

    
public function updatebrand($table,$data,$id)
{
    DB::table($table)->where('brandid',$id)->update($data);
 
}

    public function updatesubcat($table,$data,$id)
    {
        DB::table($table)->where('subcatid',$id)->update($data);
     
    }

    public function logcheck($table,$email,$pass)
    {
        
      return  DB::table($table)->where('email',$email)->where('adminpass',$pass)->first();

    }

    function viewsinglecat($table,$id)
    {
       $data=DB::table($table)->where('catid',$id)->get();
        return $data;
    }

    function viewsinglebrand($table,$id)
    {
       $data=DB::table($table)->where('brandid',$id)->get();
        return $data;
    }


    function viewsinglesubcat($table,$id)
    {
       $data=DB::table($table)->where('subcatid',$id)->get();
        return $data;
    }







    

}