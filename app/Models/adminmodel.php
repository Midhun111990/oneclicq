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


   function catnamecall($table,$id)
    {
        $data=DB::table($table)->where('catid',$id)->get();
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
   

function deletecat($table,$id)
{
    DB::table($table)->where('catid',$id)->delete();
}

public function updatecat(Request $r1,$id)
    {
        DB::table($table)->where('catid',$id)->update($data);
     
    }

    public function logcheck($table,$email,$pass)
    {
        
      return  DB::table($table)->where('email',$email)->where('adminpass',$pass)->first();

    }









    

}