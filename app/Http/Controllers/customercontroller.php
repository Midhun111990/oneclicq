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
    
 
    public function productshow($id)
    {
        $data['result']=$this->md1->viewcat('category');//view category while adding product
     
        $data['catres']=$this->md1->viewsinglecat('category',$id);//view category while adding product
        $data['resultpro']=$this->md1->viewproductcat('product','category',$id);//view product while adding product
     
        $data['res']=$this->md1->viewpro('product','category',$id);
        return view('customer.cusproductshow',$data);
    }


    public function singleproductshow($id)
    {
        $data['proresult']=$this->md1->viewsingleproduct('product',$id);//view category while adding product
     
        $data['result']=$this->md1->viewcat('category');//view category while adding product

        return view('customer.cussingleproductshow',$data);
    

    }










}
?>