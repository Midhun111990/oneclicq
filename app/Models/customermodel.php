<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class customermodel extends Model
{
    use HasFactory;

    public function viewcat($table)
    {
        
      return  DB::table($table)->get();

    }
    function viewproductcat($table,$table1,$id)
    {
      $data= DB::table($table)->join($table1,'product.catid','=','category.catid')->where('product.catid',$id)->get();
 
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


}