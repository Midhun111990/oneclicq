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

}