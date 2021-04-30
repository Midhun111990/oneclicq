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

    public function logoutcus(Request $request)
    {
     
        $request->session()->forget('email');
        return redirect('/customer');
    }
  
    public function customerindex()
    {
        $cus=session('email');

        $data['result']=$this->md1->viewcat('category');//view category while adding product
     
        $data['cusres']=$this->md1->viewcus('user',$cus);//view category while adding product
     

                return view('customer.customerbody',$data);     
    }
 
        
    
 
    public function productshow($id)
    {
         $cus=session('email');
        $data['cusres']=$this->md1->viewcus('user',$cus);//view category while adding product
     
        $data['result']=$this->md1->viewcat('category');//view category while adding product
     
        $data['catres']=$this->md1->viewsinglecat('category',$id);//view category while adding product
        $data['resultpro']=$this->md1->viewproductcat('product','category',$id);//view product while adding product
     
        $data['res']=$this->md1->viewpro('product','category',$id);
        return view('customer.cusproductshow',$data);
    }


    public function singleproductshow($id)
    {
        
        if(session()->has('email'))
        {        
            $cus=session('email');
            $data['cusres']=$this->md1->viewcus('user',$cus);//view category while adding product
         
            $data['proresult']=$this->md1->viewsingleproduct('product',$id);//view category while adding product
         
            $data['result']=$this->md1->viewcat('category');//view category while adding product
           
            return view('customer.cussingleproductshow',$data);
        }
        else
       {
        $data['proresult']=$this->md1->viewsingleproduct('product',$id);//view category while adding product
         
        $data['result']=$this->md1->viewcat('category');//view category while adding product
       
        return view('customer.cussingleproductshow',$data);
        
       } 

    }

    public function customerlog()
    {
        
        return view('customer.customerlog');

    }
    public function customersignin(Request $r1)
    {
         
        $data['result']=$this->md1->viewcat('category');//view category while adding product

        $email=$r1->input('email');
        $pass=$r1->input('pass');
    
        
       $data=$this->md1->logcheck('user',$email,$pass);//function call from model to insert
       
       if(isset($data))

   {
    $r1->session()->put(array('email'=>$data->email));
       
       return redirect('/customer');
          
    }
   else
   {
       
   return back()->with('error', 'Incorrect username/ password!');
   
}    

    }
       
       
    

    public function customerregistration()
    {
        return view('customer.customerreg');

    }



    public function customerdatasave(Request $r1)
    {
        
        $data['fname']=$r1->input('fname');
        $data['lname']=$r1->input('lname');
        $data['email']=$r1->input('email');
        $data['gender']=$r1->input('gender');
        $data['dob']=$r1->input('dob');
        $data['address']=$r1->input('address');
        $data['mobile']=$r1->input('mobile');
        $data['password']=$r1->input('password');
        
        $this->md1->cdetails('user',$data);//function call from model to insert
        // $r1->session()->put(array('sesid'=>$id));
        

        return view('customer.customerlog');

    }

    



    public function addtocart(Request $r1,$id)
    {
        $cus=session('email');
   
        
        $data['productid']=$r1->input('pid');
        $data['customerid']=$r1->input('userid');
   
        $this->md1->addtocart('cart',$data);
   

        $data['result']=$this->md1->viewcat('category');//view category while adding product
    $data['proresult']=$this->md1->viewsingleproduct('product',$id);//view category while adding product
    
    
    
    $data['cusres']=$this->md1->viewcus('user',$cus);//view category while adding product
      

        return view('customer.addtocart',$data);
   
    
    }


    public function mycart($id)
    {
        $cus=session('email');
        $data['cusres']=$this->md1->viewcus('user',$cus);//view category while adding product
        $data['result']=$this->md1->viewcat('category');//view category while adding product


        $data['cartresult']=$this->md1->cart('cart','product','user',$id);//view category while adding product
    
        return view('customer.mycart',$data);
    }












}
?>