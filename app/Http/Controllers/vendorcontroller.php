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

    public function vendorlog()
    {
        return view('vendor.vendorRegister');
    }


    public function vendorotp(Request $r1)
    {
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
    $data['result']=$this->md1->vendorname('vendordetails',$id);


      
    return view('vendor.vendorproduct',$data);
      
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
        return view('vendor.vendorBusinessdetails',$pno);
     }
    //  function busdetail($id)
    // {
    //     $data['result']=$this->md1->busdetail('vendordetails',$id);
    //     return view('vendorBusinessdetails',$data);

    // }
     
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


  $data['vendorname']=$r1->input('vendorname');
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
  
   return view('vendor.vendorbody');
          
// return redirect('/vendorVerify');
  }


  public function addproduct($id)
    {
        $data['result']=$this->md1->vendorname('vendordetails',$id);

        return view('vendor.addproduct',$data);
 
//         $data['name']=$r1->input('name');
  
//   $this->md1->prodetails('product',$data,$id);
  
//    return view('vendor.vendorbody');
          
    }

  
   



}
?>