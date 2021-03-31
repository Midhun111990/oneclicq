<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promodel;

class customercontroller extends Controller
{
  
    public function customerindex()
    {
        return view('customer.customerbody');
    }
    
 
}
?>