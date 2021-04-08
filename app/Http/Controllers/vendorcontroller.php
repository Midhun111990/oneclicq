<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vendormodel;
use DB;

class vendorcontroller extends Controller
{

    
    public $md1;
    public function __construct()
    {
        $this->md1= new vendormodel;

    }
    public function index()
    {
        return view('vendor.vendorsignin');
    }



    public function vendorlog()
    {
        return view('vendor.vendorRegister');
    }


    public function vendorotp(Request $r1)
    {
      request()->validate([
        'mob'=>'required',
        'otp_num'=>'required']
    );

      $data['phone']=$r1->input('mob');
$data['otp']=$r1->input('otp_num');
$this->md1->insert('vendorotp',$data);//function call from model to insert
return redirect('/vendorVerify');
     }

    public function verifyotp()
    {
        
        $pass['result']=$this->md1->verifyVendor('vendorotp');
  
        return view('vendor.vendorVerify',$pass);
      
    }

    public function otpcheck(Request $r1)
    {
        $mobileno=$r1->input('mob');
        $otp=$r1->input('otp');
        
       $data['result']=$this->md1->otpcheck('vendorotp',$mobileno,$otp);//function call from model to insert
   
       
       return view('vendor.vendorDetails',$data);
        

    }
  
  
  public function vendorbody()
  {
      
    $id=session('sesid');
      $data['result']=$this->md1->vendorname('vendordetails',$id);

      return view('vendor.vendorbody',$data);
  }

  public function vendorproduct()
  {
    $id=session('sesid');
    $data['res']=$this->md1->productdetails('product',$id);
    $data['result']=$this->md1->vendet('vendordetails',$id);
      
    return view('vendor.vendorproduct',$data);
      
  }
  
  public function myinformation()
  {
    $id=session('sesid');
    $data['result']=$this->md1->vendetails('vendordetails',$id);


      
    return view('vendor.myinformation',$data);
      
  }
  




    public function vendorsignin(Request $r1)
  {

    
        $email=$r1->input('email');
        $pass=$r1->input('pass');
    
        
       $data=$this->md1->logcheck('vendordetails',$email,$pass);//function call from model to insert
       if(isset($data))

   {
       $r1->session()->put(array('sesid'=>$data->id));
      
        return redirect('/vendorbody');
       
    }
   else
       
       return view('vendor.vendorsignin');
        

    }
   
    public function vendordetails(Request $r1)
    {
  
        $data['name']=$r1->input('name');
        $data['mob']=$r1->input('mob');
        $data['email']=$r1->input('email');
        $data['pass']=$r1->input('pass');
        $data['regstatus']=$r1->input('regstatus');
        $mobileno=$r1->input('mob');

        $this->md1->vdetails('vendordetails',$data);//function call from model to insert
    //    $name['resultname']=$this->md1->nocheck('vendordetails',$name);
        $pno['result']=$this->md1->nocheck('vendordetails',$mobileno);//function call from model to insert
        $pno['res']=$this->md1->busdetail('business');
    
        return view('vendor.vendorBusinessdetails',$pno);
     }
    

     
    public function businessdetails(Request $r1,$id)
    {
    //  $id=$r1->input('pno');


     

    
  $data['companyname']=$r1->input('companyname');
      
  $data['officeno']=$r1->input('officeno');
  $data['state']=$r1->input('state');
  $data['district']=$r1->input('district');
  $data['location']=$r1->input('location');
  $data['businesstype']=$r1->input('businesstype');
   
  $data['tradelicenceno']=$r1->input('tradelicenceno');


  
  $file= $r1->file('tradedocument');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['tradedocument']=$filename;

  $data['gstno']=$r1->input('gstnumber');
  
  $file= $r1->file('gstdocument');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['gstdocument']=$filename;

  
  $data['panno']=$r1->input('panno');

  $file= $r1->file('pandocument');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['pandocument']=$filename;

  $file= $r1->file('iddocument');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['iddocument']=$filename;

  $data['fssaino']=$r1->input('fssailicno');
  $data['shipping']=$r1->input('shippingmode');


  $data['storename']=$r1->input('storename');
  $data['sellingcat']=$r1->input('sellingcat');

  $file= $r1->file('storelogo');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['storelogo']=$filename;


  $data['nameinbank']=$r1->input('nameinbank');
  $data['accounttype']=$r1->input('actype');
  $data['accountno']=$r1->input('accountno');
  $data['ifsccode']=$r1->input('ifsccode');
 

  $file= $r1->file('cancelledcheque');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['cancelledcheque']=$filename;

  $file= $r1->file('signature');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['signature']=$filename;



  
  $data['regstatus']=$r1->input('regstatus');
  $data['adminstatus']=$r1->input('adminstatus');
  
  
             
  $this->md1->bdetails('vendordetails',$data,$id);

$name['result']=  $this->md1->vendet('vendordetails',$id);
   return view('vendor.vendorbody',$name);
  
   
// return redirect('/vendorVerify');
  }

  public function viewproduct($id)
    {
     
      $data['result']=$this->md1->viewp('vendordetails',$id);
     
      $data['res']=$this->md1->viewbrand('addbrand');//view brand while adding product
     
      $data['resu']=$this->md1->viewcat('category');//view category while adding product
     

      $data['resl']=$this->md1->viewsubcat('subcategory');//view subcategory while adding product
     
      return view('vendor.addproduct',$data);
    }
  // public function viewbusiness($id)
  //   {
  
  //   $data['resul']=$this->md1->viewbusiness('business');//view business while adding company info.
  //   return view('vendor.vendordetails',$data);
  // }
  
  
  
    public function addproduct(Request $r1,$id)
    {
  
  $data['name']=$r1->input('pname');
  $data['description']=$r1->input('pdes');
  $data['brandid']=$r1->input('pbrand');
  $data['otherbrand']=$r1->input('obrand');
  $data['catid']=$r1->input('pcat');
  
  $data['subcatid']=$r1->input('ptype');
  $data['gst']=$r1->input('pgst');
  $data['price']=$r1->input('pprice');
  $data['mrp']=$r1->input('pmrp');
  $data['stockunit']=$r1->input('pstock');
  $data['warrantydetails']=$r1->input('pwar');
  $data['height']=$r1->input('pheight');
  $data['weight']=$r1->input('pweight');
  $data['width']=$r1->input('pwidth');
  $data['length']=$r1->input('plen');

  $file= $r1->file('pimage');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['image']=$filename;

  $data['returnpolicy']=$r1->input('pret');
  $data['freedelivery']=$r1->input('pdelyes');
  $data['returnable']=$r1->input('preturn');
  

  $data['status']=0;
  $data['vendorid']=$id;
  
  
             
  $this->md1->addproduct('product',$data);
  

        return redirect('/vendorproduct');
          
    }

    public function logout(Request $request)
    {
     
        $request->session()->forget('sesid');
        return redirect('/');
    }

    public function  viewmyinformation($id)
    {
     

$ven=session('sesid');

       $data['result']=$this->md1->vendet('vendordetails',$ven);
   
      $data['res']=$this->md1->viewsingleproduct('product',$id);
     
     
      return view('vendor.vendorsingleproductinformation',$data);
    }
  
   
   
   



}
?>