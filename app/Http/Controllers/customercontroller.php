<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customermodel;

class customercontroller extends Controller
{
    
    public $md1;
    public function __construct()
    {
        $this->md1= new customermodel;

    }
  
    public function customerindex()
    {
        $data['result']=$this->md1->viewcat('category');//view category while adding product
     
        return view('customer.customerbody',$data);
    }
    
 
}
?>