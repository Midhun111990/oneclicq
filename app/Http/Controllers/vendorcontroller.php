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
        'mob'=>'required|unique:vendorotp,phone',
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

        
      
       $data=$this->md1->otpcheck('vendorotp',$mobileno,$otp);//function call from model to insert
   
       if(!isset($data))
   {
     return redirect('/vendorVerify');
   }
   else{
     $r1->session()->put(array('mob'=>$data->phone));
       return redirect('/vedetails');
   }        

    }
  

    public function deleteproduct($id) {
      $this->md1->deletepro('product',$id);
      return redirect('/vendorproduct');
    
      }

   
 public function approvedproduct($id)
 {
  $data['result']=$this->md1->vendet('vendordetails',$id);
  
  $data['res']=$this->md1->approvedproduct('product',$id);
           
  return view('vendor.vendorapprovedproduct',$data);
 
}

    public function pendingproduct($id)
    {
     
      
  $data['result']=$this->md1->vendet('vendordetails',$id);
        $data['res']=$this->md1->penproduct('product',$id);
        return view('vendor.vendorpendingproduct',$data);
    
 }

    public function vedetails()
    {
     return view('vendor.vendorDetails');
      
    }
    

  
  public function vendorbody()
  {
      
    $id=session('sesid');
       $data['result']=$this->md1->vendorname('vendordetails',$id);

      $data1['res']=$this->md1->mytotalproduct('product',$id);
      // $data['re']=$this->md1->totalsales('purchase',$id);

      if(isset($data1))
{
  return view('vendor.vendorbody',$data,$data1);
 
}
else{

  $data1['res']=0;
      return view('vendor.vendorbody',$data,$data1);
}
    }

    public function searchproduct(Request $request)
    { $id=session('sesid');
      $data['result']=$this->md1->vendet('vendordetails',$id);
      $data['res']=$this->md1->productdetails('product',$id);
   
      $search = $request->input('term');
      $posts = DB::table('product')
      ->where('vendorid',$id)
        ->where('name', 'LIKE', "%{$search}%")
        ->orWhere('price', 'LIKE', "%{$search}%")
        ->get();
return view('vendor.vendorproduct', compact('posts'),$data);

    }

    public function searchproductof(Request $request)
    { $id=session('sesid');
      $data['result']=$this->md1->vendet('vendordetails',$id);
      $data['res']=$this->md1->productdetails('product',$id);
      $data['offerresult']=$this->md1->offerresult('offer','product',$id);
   
      $search = $request->input('term');
      $posts = DB::table('product')
      ->where('vendorid',$id)
        ->where('name', 'LIKE', "%{$search}%")
        ->orWhere('price', 'LIKE', "%{$search}%")
        ->get();
return view('vendor.vendoroffer', compact('posts'),$data);

    }

   




  public function vendorproduct(Request $request)
  {

    $id=session('sesid');
    $data['res']=$this->md1->productdetails('product',$id);
    $data['result']=$this->md1->vendet('vendordetails',$id);
    $search = $request->input('term');
    $posts = DB::table('product')->where('pid','=','0')
      ->get();

    
    return view('vendor.vendorproduct',compact('posts'),$data);
      
  }
  

  public function comment(Request $request)
  {

    $id=session('sesid');
    $data['res']=$this->md1->productdetailswithcomment('product','feedback',$id);
    $data['result']=$this->md1->vendet('vendordetails',$id);
    $search = $request->input('term');
    $posts = DB::table('product')->where('pid','=','0')
      ->get();

    
    return view('vendor.productcomment',compact('posts'),$data);
      
  }
  


  public function vendoroffer(Request $request)
  {
    $id=session('sesid');
    $data['result']=$this->md1->vendet('vendordetails',$id);
    $data['res']=$this->md1->productdetailsstatus('product',$id);
   
    $data['offerresult']=$this->md1->offerresult('offer','product',$id);
    $search = $request->input('term');
    $posts = DB::table('product')->where('pid','=','0')
      ->get();
      return view('vendor.vendoroffer',compact('posts'),$data);
   
  }
  public function offeredproduct()
  { $id=session('sesid');
    $data['result']=$this->md1->vendet('vendordetails',$id);
    $data['offerresult']=$this->md1->offerresult('offer','product',$id);
 
 
return view('vendor.offeredproduct',$data);

  }


  public function deleteoffer($id) {
    $data['offerstatus']="0";
    $this->md1->updateproduct('product',$data,$id);
 
    $this->md1->deleteoffer('offer',$id);
    return redirect('/vendoroffer');
  
    }







  public function myinformation()
  {
    $id=session('sesid');
     $pno['res']=$this->md1->busdetail('business');
    $data['result']=$this->md1->vendetails('vendordetails',$id);


      
    return view('vendor.myinformation',$data,$pno);
      
  }
  
  public function vendorpassforgot()
  {
      return view('vendor.vendorpasswordforgot');
  }

  public function vendorforgot(Request $r1)
  {




  }





    public function vendorsignin(Request $r1)
  {

    request()->validate([
      'email'=>'required|email',
      'pass'  =>'required']
  );

    
        $email=$r1->input('email');
        $pass=$r1->input('pass');
    
        
       $data=$this->md1->logcheck('vendordetails',$email,$pass);//function call from model to insert
       if(isset($data))

   {
       $r1->session()->put(array('sesid'=>$data->id));
      
        return redirect('/vendorbody');
       
    }
   else
       
   return back()->with('error', 'Incorrect username/ password!');
        

    }

    public function viewmyinfo($id)
    {
      $ven=session('sesid');

      $data['result']=$this->md1->vendet('vendordetails',$ven);
  
     $data['res']=$this->md1->viewsingleproduct('product',$id);
    
     $data['catres']=$this->md1->showcatname('product','category','subcategory',$id);
    
     $data['resu']=$this->md1->viewcat('category');//view category while adding product
    
     $data['brandres']=$this->md1->viewbrand('addbrand');//view brand while adding product
     return view('vendor.vsingleproductinformation',$data);
    }



    
    public function modifyinfo(Request $r1,$id)
    {
      $file= $r1->file('storelogo');
      $file1= $r1->file('cancelledcheque');
      $file2= $r1->file('signature');
      $file3= $r1->file('tradedocument');
      $file4= $r1->file('gstdocument');
      $file5= $r1->file('pandocument');
      $file6= $r1->file('iddocument');
     
      $data['state']='KERALA';
      $data['district']=$r1->input('district');
      if($file==""&&$file1==""&&$file2==""&&$file3==""&&$file4==""&&$file5==""&&
      $file6=="")
{
  $data['name']=$r1->input('name');
  $data['mob']=$r1->input('mob');
  $data['email']=$r1->input('email');
  $data['companyname']=$r1->input('companyname');
  $data['officeno']=$r1->input('officeno');
  $data['location']=$r1->input('location');
  $data['storename']=$r1->input('storename');
  $data['sellingcat']=$r1->input('sellingcat');
  $data['storename']=$r1->input('storename');
  $data['accountno']=$r1->input('accountno');
  $data['nameinbank']=$r1->input('nameinbank');
  $data['ifsccode']=$r1->input('ifsccode');
  $data['tradelicenceno']=$r1->input('tradelicenceno');
  $data['gstno']=$r1->input('gstno');
  $data['panno']=$r1->input('panno');
  $data['fssaino']=$r1->input('fssaino');
  $data['businesstype']=$r1->input('businesstype');
  $data['accounttype']=$r1->input('accounttype');
  $data['shipping']=$r1->input('shippingmode');
 


}
else if($file1==""&&$file2==""&&$file3==""&&$file4==""&&$file5==""&&
      $file6=="")
{
  if($file1==""&&$file2==""&&$file3==""&&$file4==""&&$file5==""&&
      $file6=="")
      {
  $data['name']=$r1->input('name');
  $data['mob']=$r1->input('mob');
  $data['email']=$r1->input('email');
  $data['companyname']=$r1->input('companyname');
  $data['officeno']=$r1->input('officeno');
  $data['location']=$r1->input('location');
  $data['storename']=$r1->input('storename');
  $data['sellingcat']=$r1->input('sellingcat');
  $data['storename']=$r1->input('storename');
  $data['accountno']=$r1->input('accountno');
  $data['nameinbank']=$r1->input('nameinbank');
  $data['ifsccode']=$r1->input('ifsccode');
  $data['tradelicenceno']=$r1->input('tradelicenceno');
  $data['gstno']=$r1->input('gstno');
  $data['panno']=$r1->input('panno');
  $data['fssaino']=$r1->input('fssaino');
  $data['businesstype']=$r1->input('businesstype');
  $data['accounttype']=$r1->input('accounttype');
  $data['shipping']=$r1->input('shippingmode');
  
  $file= $r1->file('storelogo');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['storelogo']=$filename;

      } 
      else{
        $data['name']=$r1->input('name');
        $data['mob']=$r1->input('mob');
        $data['email']=$r1->input('email');
        $data['companyname']=$r1->input('companyname');
        $data['officeno']=$r1->input('officeno');
        $data['location']=$r1->input('location');
        $data['storename']=$r1->input('storename');
        $data['sellingcat']=$r1->input('sellingcat');
        $data['storename']=$r1->input('storename');
        $data['accountno']=$r1->input('accountno');
        $data['ifsccode']=$r1->input('ifsccode');
        $data['tradelicenceno']=$r1->input('tradelicenceno');
        $data['gstno']=$r1->input('gstno');
        $data['panno']=$r1->input('panno');
        $data['nameinbank']=$r1->input('nameinbank');
        $data['fssaino']=$r1->input('fssaino');
        $data['businesstype']=$r1->input('businesstype');
        $data['accounttype']=$r1->input('accounttype');
        $data['shipping']=$r1->input('shippingmode');
       
      $file= $r1->file('storelogo');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['storelogo']=$filename;
      
      
      $file= $r1->file('cancelledcheque');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['cancelledcheque']=$filename;
      
      $file= $r1->file('signature');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['signature']=$filename;
      
      $file= $r1->file('tradedocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['tradedocument']=$filename;
      
      $file= $r1->file('gstdocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['gstdocument']=$filename;
      
      $file= $r1->file('pandocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['pandocument']=$filename;
      
      $file= $r1->file('iddocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['iddocument']=$filename;
      
        $this->md1->modifyinfo('vendordetails',$data,$id);
              
             
        return redirect('/myinformation/{$id}');
      
      
      }
}


else if($file==""&&$file2==""&&$file3==""&&$file4==""&&$file5==""&&
      $file6=="")
{
  if($file==""&&$file2==""&&$file3==""&&$file4==""&&$file5==""&&
      $file6=="")
      {
  $data['name']=$r1->input('name');
  $data['mob']=$r1->input('mob');
  $data['email']=$r1->input('email');
  $data['companyname']=$r1->input('companyname');
  $data['officeno']=$r1->input('officeno');
  $data['location']=$r1->input('location');
  $data['storename']=$r1->input('storename');
  $data['sellingcat']=$r1->input('sellingcat');
  $data['storename']=$r1->input('storename');
  $data['accountno']=$r1->input('accountno');
  $data['nameinbank']=$r1->input('nameinbank');
  $data['ifsccode']=$r1->input('ifsccode');
  $data['tradelicenceno']=$r1->input('tradelicenceno');
  $data['gstno']=$r1->input('gstno');
  $data['panno']=$r1->input('panno');
  $data['fssaino']=$r1->input('fssaino');
  $data['businesstype']=$r1->input('businesstype');
  $data['accounttype']=$r1->input('accounttype');
  $data['shipping']=$r1->input('shippingmode');
  
  $file= $r1->file('cancelledcheque');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['cancelledcheque']=$filename;

      } 
      else{
        $data['name']=$r1->input('name');
        $data['mob']=$r1->input('mob');
        $data['email']=$r1->input('email');
        $data['companyname']=$r1->input('companyname');
        $data['officeno']=$r1->input('officeno');
        $data['location']=$r1->input('location');
        $data['storename']=$r1->input('storename');
        $data['sellingcat']=$r1->input('sellingcat');
        $data['storename']=$r1->input('storename');
        $data['accountno']=$r1->input('accountno');
        $data['ifsccode']=$r1->input('ifsccode');
        $data['tradelicenceno']=$r1->input('tradelicenceno');
        $data['gstno']=$r1->input('gstno');
        $data['panno']=$r1->input('panno');
        $data['nameinbank']=$r1->input('nameinbank');
        $data['fssaino']=$r1->input('fssaino');
        $data['businesstype']=$r1->input('businesstype');
        $data['accounttype']=$r1->input('accounttype');
        $data['shipping']=$r1->input('shippingmode');
       
      $file= $r1->file('storelogo');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['storelogo']=$filename;
      
      
      $file= $r1->file('cancelledcheque');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['cancelledcheque']=$filename;
      
      $file= $r1->file('signature');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['signature']=$filename;
      
      $file= $r1->file('tradedocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['tradedocument']=$filename;
      
      $file= $r1->file('gstdocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['gstdocument']=$filename;
      
      $file= $r1->file('pandocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['pandocument']=$filename;
      
      $file= $r1->file('iddocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['iddocument']=$filename;
      
        $this->md1->modifyinfo('vendordetails',$data,$id);
              
             
        return redirect('/myinformation/{$id}');
      
      
      }
}



else if($file==""&&$file1==""&&$file3==""&&$file4==""&&$file5==""&&
      $file6=="")
{
  if($file==""&&$file1==""&&$file3==""&&$file4==""&&$file5==""&&
      $file6=="")
      {
  $data['name']=$r1->input('name');
  $data['mob']=$r1->input('mob');
  $data['email']=$r1->input('email');
  $data['companyname']=$r1->input('companyname');
  $data['officeno']=$r1->input('officeno');
  $data['location']=$r1->input('location');
  $data['storename']=$r1->input('storename');
  $data['sellingcat']=$r1->input('sellingcat');
  $data['storename']=$r1->input('storename');
  $data['accountno']=$r1->input('accountno');
  $data['nameinbank']=$r1->input('nameinbank');
  $data['ifsccode']=$r1->input('ifsccode');
  $data['tradelicenceno']=$r1->input('tradelicenceno');
  $data['gstno']=$r1->input('gstno');
  $data['panno']=$r1->input('panno');
  $data['fssaino']=$r1->input('fssaino');
  $data['businesstype']=$r1->input('businesstype');
  $data['accounttype']=$r1->input('accounttype');
  $data['shipping']=$r1->input('shippingmode');
  
  
  $file= $r1->file('signature');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['signature']=$filename;

      } 
      else{
        $data['name']=$r1->input('name');
        $data['mob']=$r1->input('mob');
        $data['email']=$r1->input('email');
        $data['companyname']=$r1->input('companyname');
        $data['officeno']=$r1->input('officeno');
        $data['location']=$r1->input('location');
        $data['storename']=$r1->input('storename');
        $data['sellingcat']=$r1->input('sellingcat');
        $data['storename']=$r1->input('storename');
        $data['accountno']=$r1->input('accountno');
        $data['ifsccode']=$r1->input('ifsccode');
        $data['tradelicenceno']=$r1->input('tradelicenceno');
        $data['gstno']=$r1->input('gstno');
        $data['panno']=$r1->input('panno');
        $data['nameinbank']=$r1->input('nameinbank');
        $data['fssaino']=$r1->input('fssaino');
        $data['businesstype']=$r1->input('businesstype');
        $data['accounttype']=$r1->input('accounttype');
        $data['shipping']=$r1->input('shippingmode');
       
      $file= $r1->file('storelogo');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['storelogo']=$filename;
      
      
      $file= $r1->file('cancelledcheque');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['cancelledcheque']=$filename;
      
      $file= $r1->file('signature');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['signature']=$filename;
      
      $file= $r1->file('tradedocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['tradedocument']=$filename;
      
      $file= $r1->file('gstdocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['gstdocument']=$filename;
      
      $file= $r1->file('pandocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['pandocument']=$filename;
      
      $file= $r1->file('iddocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['iddocument']=$filename;
      
        $this->md1->modifyinfo('vendordetails',$data,$id);
              
             
        return redirect('/myinformation/{$id}');
      
      
      }
}

else if($file==""&&$file1==""&&$file2==""&&$file4==""&&$file5==""&&
      $file6=="")
{
  if($file==""&&$file1==""&&$file2==""&&$file4==""&&$file5==""&&
      $file6=="")
      {
  $data['name']=$r1->input('name');
  $data['mob']=$r1->input('mob');
  $data['email']=$r1->input('email');
  $data['companyname']=$r1->input('companyname');
  $data['officeno']=$r1->input('officeno');
  $data['location']=$r1->input('location');
  $data['storename']=$r1->input('storename');
  $data['sellingcat']=$r1->input('sellingcat');
  $data['storename']=$r1->input('storename');
  $data['accountno']=$r1->input('accountno');
  $data['nameinbank']=$r1->input('nameinbank');
  $data['ifsccode']=$r1->input('ifsccode');
  $data['tradelicenceno']=$r1->input('tradelicenceno');
  $data['gstno']=$r1->input('gstno');
  $data['panno']=$r1->input('panno');
  $data['fssaino']=$r1->input('fssaino');
  $data['businesstype']=$r1->input('businesstype');
  $data['accounttype']=$r1->input('accounttype');
  $data['shipping']=$r1->input('shippingmode');
  
      
  $file= $r1->file('tradedocument');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['tradedocument']=$filename;

      } 
      else{
        $data['name']=$r1->input('name');
        $data['mob']=$r1->input('mob');
        $data['email']=$r1->input('email');
        $data['companyname']=$r1->input('companyname');
        $data['officeno']=$r1->input('officeno');
        $data['location']=$r1->input('location');
        $data['storename']=$r1->input('storename');
        $data['sellingcat']=$r1->input('sellingcat');
        $data['storename']=$r1->input('storename');
        $data['accountno']=$r1->input('accountno');
        $data['ifsccode']=$r1->input('ifsccode');
        $data['tradelicenceno']=$r1->input('tradelicenceno');
        $data['gstno']=$r1->input('gstno');
        $data['panno']=$r1->input('panno');
        $data['nameinbank']=$r1->input('nameinbank');
        $data['fssaino']=$r1->input('fssaino');
        $data['businesstype']=$r1->input('businesstype');
        $data['accounttype']=$r1->input('accounttype');
        $data['shipping']=$r1->input('shippingmode');
       
      $file= $r1->file('storelogo');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['storelogo']=$filename;
      
      
      $file= $r1->file('cancelledcheque');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['cancelledcheque']=$filename;
      
      $file= $r1->file('signature');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['signature']=$filename;
      
      $file= $r1->file('tradedocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['tradedocument']=$filename;
      
      $file= $r1->file('gstdocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['gstdocument']=$filename;
      
      $file= $r1->file('pandocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['pandocument']=$filename;
      
      $file= $r1->file('iddocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['iddocument']=$filename;
      
        $this->md1->modifyinfo('vendordetails',$data,$id);
              
             
        return redirect('/myinformation/{$id}');
      
      
      }
}

else if($file==""&&$file1==""&&$file2==""&&$file3==""&&$file5==""&&
      $file6=="")
{
  if($file==""&&$file1==""&&$file2==""&&$file3==""&&$file5==""&&
      $file6=="")
      {
  $data['name']=$r1->input('name');
  $data['mob']=$r1->input('mob');
  $data['email']=$r1->input('email');
  $data['companyname']=$r1->input('companyname');
  $data['officeno']=$r1->input('officeno');
  $data['location']=$r1->input('location');
  $data['storename']=$r1->input('storename');
  $data['sellingcat']=$r1->input('sellingcat');
  $data['storename']=$r1->input('storename');
  $data['accountno']=$r1->input('accountno');
  $data['nameinbank']=$r1->input('nameinbank');
  $data['ifsccode']=$r1->input('ifsccode');
  $data['tradelicenceno']=$r1->input('tradelicenceno');
  $data['gstno']=$r1->input('gstno');
  $data['panno']=$r1->input('panno');
  $data['fssaino']=$r1->input('fssaino');
  $data['businesstype']=$r1->input('businesstype');
  $data['accounttype']=$r1->input('accounttype');
  $data['shipping']=$r1->input('shippingmode');
  
  
  $file= $r1->file('gstdocument');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['gstdocument']=$filename;

} 
      else{
        $data['name']=$r1->input('name');
        $data['mob']=$r1->input('mob');
        $data['email']=$r1->input('email');
        $data['companyname']=$r1->input('companyname');
        $data['officeno']=$r1->input('officeno');
        $data['location']=$r1->input('location');
        $data['storename']=$r1->input('storename');
        $data['sellingcat']=$r1->input('sellingcat');
        $data['storename']=$r1->input('storename');
        $data['accountno']=$r1->input('accountno');
        $data['ifsccode']=$r1->input('ifsccode');
        $data['tradelicenceno']=$r1->input('tradelicenceno');
        $data['gstno']=$r1->input('gstno');
        $data['panno']=$r1->input('panno');
        $data['nameinbank']=$r1->input('nameinbank');
        $data['fssaino']=$r1->input('fssaino');
        $data['businesstype']=$r1->input('businesstype');
        $data['accounttype']=$r1->input('accounttype');
        $data['shipping']=$r1->input('shippingmode');
       
      $file= $r1->file('storelogo');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['storelogo']=$filename;
      
      
      $file= $r1->file('cancelledcheque');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['cancelledcheque']=$filename;
      
      $file= $r1->file('signature');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['signature']=$filename;
      
      $file= $r1->file('tradedocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['tradedocument']=$filename;
      
      $file= $r1->file('gstdocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['gstdocument']=$filename;
      
      $file= $r1->file('pandocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['pandocument']=$filename;
      
      $file= $r1->file('iddocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['iddocument']=$filename;
      
        $this->md1->modifyinfo('vendordetails',$data,$id);
              
             
        return redirect('/myinformation/{$id}');
      
      
      }
}

else if($file==""&&$file1==""&&$file2==""&&$file3==""&&$file4==""&&
      $file6=="")
{
  if($file==""&&$file1==""&&$file2==""&&$file3==""&&$file4==""&&
      $file6=="")
      {
  $data['name']=$r1->input('name');
  $data['mob']=$r1->input('mob');
  $data['email']=$r1->input('email');
  $data['companyname']=$r1->input('companyname');
  $data['officeno']=$r1->input('officeno');
  $data['location']=$r1->input('location');
  $data['storename']=$r1->input('storename');
  $data['sellingcat']=$r1->input('sellingcat');
  $data['storename']=$r1->input('storename');
  $data['accountno']=$r1->input('accountno');
  $data['nameinbank']=$r1->input('nameinbank');
  $data['ifsccode']=$r1->input('ifsccode');
  $data['tradelicenceno']=$r1->input('tradelicenceno');
  $data['gstno']=$r1->input('gstno');
  $data['panno']=$r1->input('panno');
  $data['fssaino']=$r1->input('fssaino');
  $data['businesstype']=$r1->input('businesstype');
  $data['accounttype']=$r1->input('accounttype');
  $data['shipping']=$r1->input('shippingmode');
  
  
  $file= $r1->file('pandocument');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['pandocument']=$filename;

      } 
      else{
        $data['name']=$r1->input('name');
        $data['mob']=$r1->input('mob');
        $data['email']=$r1->input('email');
        $data['companyname']=$r1->input('companyname');
        $data['officeno']=$r1->input('officeno');
        $data['location']=$r1->input('location');
        $data['storename']=$r1->input('storename');
        $data['sellingcat']=$r1->input('sellingcat');
        $data['storename']=$r1->input('storename');
        $data['accountno']=$r1->input('accountno');
        $data['ifsccode']=$r1->input('ifsccode');
        $data['tradelicenceno']=$r1->input('tradelicenceno');
        $data['gstno']=$r1->input('gstno');
        $data['panno']=$r1->input('panno');
        $data['nameinbank']=$r1->input('nameinbank');
        $data['fssaino']=$r1->input('fssaino');
        $data['businesstype']=$r1->input('businesstype');
        $data['accounttype']=$r1->input('accounttype');
        $data['shipping']=$r1->input('shippingmode');
       
      $file= $r1->file('storelogo');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['storelogo']=$filename;
      
      
      $file= $r1->file('cancelledcheque');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['cancelledcheque']=$filename;
      
      $file= $r1->file('signature');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['signature']=$filename;
      
      $file= $r1->file('tradedocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['tradedocument']=$filename;
      
      $file= $r1->file('gstdocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['gstdocument']=$filename;
      
      $file= $r1->file('pandocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['pandocument']=$filename;
      
      $file= $r1->file('iddocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['iddocument']=$filename;
      
        $this->md1->modifyinfo('vendordetails',$data,$id);
              
             
        return redirect('/myinformation/{$id}');
      
      
      }
}

else if($file==""&&$file1==""&&$file2==""&&$file3==""&&$file4==""&&
      $file5=="")
{
  if($file==""&&$file1==""&&$file2==""&&$file3==""&&$file4==""&&
      $file5=="")
      {
  $data['name']=$r1->input('name');
  $data['mob']=$r1->input('mob');
  $data['email']=$r1->input('email');
  $data['companyname']=$r1->input('companyname');
  $data['officeno']=$r1->input('officeno');
  $data['location']=$r1->input('location');
  $data['storename']=$r1->input('storename');
  $data['sellingcat']=$r1->input('sellingcat');
  $data['storename']=$r1->input('storename');
  $data['accountno']=$r1->input('accountno');
  $data['nameinbank']=$r1->input('nameinbank');
  $data['ifsccode']=$r1->input('ifsccode');
  $data['tradelicenceno']=$r1->input('tradelicenceno');
  $data['gstno']=$r1->input('gstno');
  $data['panno']=$r1->input('panno');
  $data['fssaino']=$r1->input('fssaino');
  $data['businesstype']=$r1->input('businesstype');
  $data['accounttype']=$r1->input('accounttype');
  $data['shipping']=$r1->input('shippingmode');
  
  
  $file= $r1->file('iddocument');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['iddocument']=$filename;

      } 
      else{
        $data['name']=$r1->input('name');
        $data['mob']=$r1->input('mob');
        $data['email']=$r1->input('email');
        $data['companyname']=$r1->input('companyname');
        $data['officeno']=$r1->input('officeno');
        $data['location']=$r1->input('location');
        $data['storename']=$r1->input('storename');
        $data['sellingcat']=$r1->input('sellingcat');
        $data['storename']=$r1->input('storename');
        $data['accountno']=$r1->input('accountno');
        $data['ifsccode']=$r1->input('ifsccode');
        $data['tradelicenceno']=$r1->input('tradelicenceno');
        $data['gstno']=$r1->input('gstno');
        $data['panno']=$r1->input('panno');
        $data['nameinbank']=$r1->input('nameinbank');
        $data['fssaino']=$r1->input('fssaino');
        $data['businesstype']=$r1->input('businesstype');
        $data['accounttype']=$r1->input('accounttype');
        $data['shipping']=$r1->input('shippingmode');
       
      $file= $r1->file('storelogo');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['storelogo']=$filename;
      
      
      $file= $r1->file('cancelledcheque');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['cancelledcheque']=$filename;
      
      $file= $r1->file('signature');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['signature']=$filename;
      
      $file= $r1->file('tradedocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['tradedocument']=$filename;
      
      $file= $r1->file('gstdocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['gstdocument']=$filename;
      
      $file= $r1->file('pandocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['pandocument']=$filename;
      
      $file= $r1->file('iddocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['iddocument']=$filename;
      
        $this->md1->modifyinfo('vendordetails',$data,$id);
              
             
        return redirect('/myinformation/{$id}');
      
      
      }
}


else if($file==""&&$file6==""&&$file3==""&&$file4==""&&
      $file5=="")
{
  if($file==""&&$file6==""&&$file3==""&&$file4==""&&
      $file5=="")
      {
  $data['name']=$r1->input('name');
  $data['mob']=$r1->input('mob');
  $data['email']=$r1->input('email');
  $data['companyname']=$r1->input('companyname');
  $data['officeno']=$r1->input('officeno');
  $data['location']=$r1->input('location');
  $data['storename']=$r1->input('storename');
  $data['sellingcat']=$r1->input('sellingcat');
  $data['storename']=$r1->input('storename');
  $data['accountno']=$r1->input('accountno');
  $data['nameinbank']=$r1->input('nameinbank');
  $data['ifsccode']=$r1->input('ifsccode');
  $data['tradelicenceno']=$r1->input('tradelicenceno');
  $data['gstno']=$r1->input('gstno');
  $data['panno']=$r1->input('panno');
  $data['fssaino']=$r1->input('fssaino');
  $data['businesstype']=$r1->input('businesstype');
  $data['accounttype']=$r1->input('accounttype');
  $data['shipping']=$r1->input('shippingmode');
  
  
  $file= $r1->file('cancelledcheque');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['cancelledcheque']=$filename;
  
  $file= $r1->file('signature');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['signature']=$filename;

      } 
      else{
        $data['name']=$r1->input('name');
        $data['mob']=$r1->input('mob');
        $data['email']=$r1->input('email');
        $data['companyname']=$r1->input('companyname');
        $data['officeno']=$r1->input('officeno');
        $data['location']=$r1->input('location');
        $data['storename']=$r1->input('storename');
        $data['sellingcat']=$r1->input('sellingcat');
        $data['storename']=$r1->input('storename');
        $data['accountno']=$r1->input('accountno');
        $data['ifsccode']=$r1->input('ifsccode');
        $data['tradelicenceno']=$r1->input('tradelicenceno');
        $data['gstno']=$r1->input('gstno');
        $data['panno']=$r1->input('panno');
        $data['nameinbank']=$r1->input('nameinbank');
        $data['fssaino']=$r1->input('fssaino');
        $data['businesstype']=$r1->input('businesstype');
        $data['accounttype']=$r1->input('accounttype');
        $data['shipping']=$r1->input('shippingmode');
       
      $file= $r1->file('storelogo');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['storelogo']=$filename;
      
      
      $file= $r1->file('cancelledcheque');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['cancelledcheque']=$filename;
      
      $file= $r1->file('signature');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['signature']=$filename;
      
      $file= $r1->file('tradedocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['tradedocument']=$filename;
      
      $file= $r1->file('gstdocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['gstdocument']=$filename;
      
      $file= $r1->file('pandocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['pandocument']=$filename;
      
      $file= $r1->file('iddocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['iddocument']=$filename;
      
        $this->md1->modifyinfo('vendordetails',$data,$id);
              
             
        return redirect('/myinformation/{$id}');
      
      
      }
}
else if($file3==""&&$file4==""&&$file5==""&&$file6=="")
{
  if($file3==""&&$file4==""&&$file5==""&&$file6=="")
      {
  $data['name']=$r1->input('name');
  $data['mob']=$r1->input('mob');
  $data['email']=$r1->input('email');
  $data['companyname']=$r1->input('companyname');
  $data['officeno']=$r1->input('officeno');
  $data['location']=$r1->input('location');
  $data['storename']=$r1->input('storename');
  $data['sellingcat']=$r1->input('sellingcat');
  $data['storename']=$r1->input('storename');
  $data['accountno']=$r1->input('accountno');
  $data['nameinbank']=$r1->input('nameinbank');
  $data['ifsccode']=$r1->input('ifsccode');
  $data['tradelicenceno']=$r1->input('tradelicenceno');
  $data['gstno']=$r1->input('gstno');
  $data['panno']=$r1->input('panno');
  $data['fssaino']=$r1->input('fssaino');
  $data['businesstype']=$r1->input('businesstype');
  $data['accounttype']=$r1->input('accounttype');
  $data['shipping']=$r1->input('shippingmode');
  
       
  $file= $r1->file('storelogo');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['storelogo']=$filename;

  $file= $r1->file('cancelledcheque');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['cancelledcheque']=$filename;
  
  $file= $r1->file('signature');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['signature']=$filename;

      } 
      else{
        $data['name']=$r1->input('name');
        $data['mob']=$r1->input('mob');
        $data['email']=$r1->input('email');
        $data['companyname']=$r1->input('companyname');
        $data['officeno']=$r1->input('officeno');
        $data['location']=$r1->input('location');
        $data['storename']=$r1->input('storename');
        $data['sellingcat']=$r1->input('sellingcat');
        $data['storename']=$r1->input('storename');
        $data['accountno']=$r1->input('accountno');
        $data['ifsccode']=$r1->input('ifsccode');
        $data['tradelicenceno']=$r1->input('tradelicenceno');
        $data['gstno']=$r1->input('gstno');
        $data['panno']=$r1->input('panno');
        $data['nameinbank']=$r1->input('nameinbank');
        $data['fssaino']=$r1->input('fssaino');
        $data['businesstype']=$r1->input('businesstype');
        $data['accounttype']=$r1->input('accounttype');
        $data['shipping']=$r1->input('shippingmode');
       
      $file= $r1->file('storelogo');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['storelogo']=$filename;
      
      
      $file= $r1->file('cancelledcheque');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['cancelledcheque']=$filename;
      
      $file= $r1->file('signature');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['signature']=$filename;
      
      $file= $r1->file('tradedocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['tradedocument']=$filename;
      
      $file= $r1->file('gstdocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['gstdocument']=$filename;
      
      $file= $r1->file('pandocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['pandocument']=$filename;
      
      $file= $r1->file('iddocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['iddocument']=$filename;
      
        $this->md1->modifyinfo('vendordetails',$data,$id);
              
             
        return redirect('/myinformation/{$id}');
      
      
      }
}



else if($file==""&&$file1==""&&$file2=="")
{
  if($file==""&&$file1==""&&$file2=="")
      {
  $data['name']=$r1->input('name');
  $data['mob']=$r1->input('mob');
  $data['email']=$r1->input('email');
  $data['companyname']=$r1->input('companyname');
  $data['officeno']=$r1->input('officeno');
  $data['location']=$r1->input('location');
  $data['storename']=$r1->input('storename');
  $data['sellingcat']=$r1->input('sellingcat');
  $data['storename']=$r1->input('storename');
  $data['accountno']=$r1->input('accountno');
  $data['nameinbank']=$r1->input('nameinbank');
  $data['ifsccode']=$r1->input('ifsccode');
  $data['tradelicenceno']=$r1->input('tradelicenceno');
  $data['gstno']=$r1->input('gstno');
  $data['panno']=$r1->input('panno');
  $data['fssaino']=$r1->input('fssaino');
  $data['businesstype']=$r1->input('businesstype');
  $data['accounttype']=$r1->input('accounttype');
  $data['shipping']=$r1->input('shippingmode');
  
  $file= $r1->file('tradedocument');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['tradedocument']=$filename;
  
  $file= $r1->file('gstdocument');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['gstdocument']=$filename;
  
  $file= $r1->file('pandocument');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['pandocument']=$filename;
  
  $file= $r1->file('iddocument');
  $filename = $file->getClientOriginalName();
  $file->move(public_path().'/uploads/images', $filename);
  $data['iddocument']=$filename;
  

      } 
      else{
        $data['name']=$r1->input('name');
        $data['mob']=$r1->input('mob');
        $data['email']=$r1->input('email');
        $data['companyname']=$r1->input('companyname');
        $data['officeno']=$r1->input('officeno');
        $data['location']=$r1->input('location');
        $data['storename']=$r1->input('storename');
        $data['sellingcat']=$r1->input('sellingcat');
        $data['storename']=$r1->input('storename');
        $data['accountno']=$r1->input('accountno');
        $data['ifsccode']=$r1->input('ifsccode');
        $data['tradelicenceno']=$r1->input('tradelicenceno');
        $data['gstno']=$r1->input('gstno');
        $data['panno']=$r1->input('panno');
        $data['nameinbank']=$r1->input('nameinbank');
        $data['fssaino']=$r1->input('fssaino');
        $data['businesstype']=$r1->input('businesstype');
        $data['accounttype']=$r1->input('accounttype');
        $data['shipping']=$r1->input('shippingmode');
       
      $file= $r1->file('storelogo');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['storelogo']=$filename;
      
      
      $file= $r1->file('cancelledcheque');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['cancelledcheque']=$filename;
      
      $file= $r1->file('signature');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['signature']=$filename;
      
      $file= $r1->file('tradedocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['tradedocument']=$filename;
      
      $file= $r1->file('gstdocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['gstdocument']=$filename;
      
      $file= $r1->file('pandocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['pandocument']=$filename;
      
      $file= $r1->file('iddocument');
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['iddocument']=$filename;
      
        $this->md1->modifyinfo('vendordetails',$data,$id);
              
             
        return redirect('/myinformation/{$id}');
      
      
      }
}






else {

  $data['name']=$r1->input('name');
  $data['mob']=$r1->input('mob');
  $data['email']=$r1->input('email');
  $data['companyname']=$r1->input('companyname');
  $data['officeno']=$r1->input('officeno');
  $data['location']=$r1->input('location');
  $data['storename']=$r1->input('storename');
  $data['sellingcat']=$r1->input('sellingcat');
  $data['storename']=$r1->input('storename');
  $data['accountno']=$r1->input('accountno');
  $data['ifsccode']=$r1->input('ifsccode');
  $data['tradelicenceno']=$r1->input('tradelicenceno');
  $data['gstno']=$r1->input('gstno');
  $data['panno']=$r1->input('panno');
  $data['nameinbank']=$r1->input('nameinbank');
  $data['fssaino']=$r1->input('fssaino');
  $data['businesstype']=$r1->input('businesstype');
  $data['accounttype']=$r1->input('accounttype');
  $data['shipping']=$r1->input('shippingmode');
 
$file= $r1->file('storelogo');
$filename = $file->getClientOriginalName();
$file->move(public_path().'/uploads/images', $filename);
$data['storelogo']=$filename;


$file= $r1->file('cancelledcheque');
$filename = $file->getClientOriginalName();
$file->move(public_path().'/uploads/images', $filename);
$data['cancelledcheque']=$filename;

$file= $r1->file('signature');
$filename = $file->getClientOriginalName();
$file->move(public_path().'/uploads/images', $filename);
$data['signature']=$filename;

$file= $r1->file('tradedocument');
$filename = $file->getClientOriginalName();
$file->move(public_path().'/uploads/images', $filename);
$data['tradedocument']=$filename;

$file= $r1->file('gstdocument');
$filename = $file->getClientOriginalName();
$file->move(public_path().'/uploads/images', $filename);
$data['gstdocument']=$filename;

$file= $r1->file('pandocument');
$filename = $file->getClientOriginalName();
$file->move(public_path().'/uploads/images', $filename);
$data['pandocument']=$filename;

$file= $r1->file('iddocument');
$filename = $file->getClientOriginalName();
$file->move(public_path().'/uploads/images', $filename);
$data['iddocument']=$filename;

  $this->md1->modifyinfo('vendordetails',$data,$id);
        
       
  return redirect('/myinformation/{$id}');

}
$data['adminstatus']=1;
        $this->md1->modifyinfo('vendordetails',$data,$id);
        
       
        return redirect('/myinformation/{$id}');
          
    }
   



    public function vendordetails(Request $r1)
    {
      request()->validate(
        ['name'=>'required','email'=>'required|email|unique:vendordetails,email'
        ,'pass'=>'required','cpass'=>'required|same:pass'
        ]
    );
  
        $data['name']=$r1->input('name');
        $data['mob']=$r1->input('mob');
        
        $email=$r1->input('email'); 
        $pass=$r1->input('pass');
        
        $data['email']=$email;
        $data['pass']=$pass;
        
        $data['regstatus']=$r1->input('regstatus');
        $mobileno=$r1->input('mob');

        $this->md1->vdetails('vendordetails',$data);//function call from model to insert

        $data1=$this->md1->logcheck('vendordetails',$email,$pass);
       
        if(isset($data1))
        {
          $r1->session()->put(array('sesid'=>$data1->id));
          return redirect('/busdetail');

        }

        
        
     }
    
     public function busdetail()
     {
       
      $pno['res']=$this->md1->busdetail('business');

      return view('vendor.vendorBusinessdetails',$pno);
     }

     
     
    public function businessdetails(Request $r1,$id)
    {
    
     request()->validate(
     ['companyname'=>'required'
     ,'officeno'=>'required|numeric'
     ,'district'=>'required'
     ,'location'=>'required'
     ,'businesstype'=>'required'
      ,'tradelicenceno'=>'required'
      ,'tradedocument'=>'required'
      ,'gstnumber'=>'required'
     ,'gstdocument'=>'required'
      ,'panno'=>'required'
      ,'pandocument'=>'required'
      ,'iddocument'=>'required'
      ,'shippingmode'=>'required'
      ,'storename'=>'required'
  ,'gstnumber'=>'required'
       ,'sellingcat'=>'required'
        ,'storelogo'=>'required|image'
      ,'nameinbank'=>'required'
      ,'accounttype'=>'required'
       ,'accountno'=>'required'
        ,'ifsccode'=>'required'
        ,'cancelledcheque'=>'required'
        ,'signature'=>'required'
        ,'sellingcat'=>'required'
      ]);   
     
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
  $data['pandocument']=$filename;  $file= $r1->file('iddocument');
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
  $data['accounttype']=$r1->input('accounttype');
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

  

         
return redirect('/venbody');


   
  }
  
  public function venbody()
  
 {
   $id=session('sesid');
  
   $name['result']=  $this->md1->vendet('vendordetails',$id);
  $data1['res']=$this->md1->mytotalproduct('product',$id);
  

  return view('vendor.vendorbody',$name,$data1);
 }
  

  public function viewsubproduct($id)
  
 {
  $data=$this->md1->selectDataById('subcategory',$id);
  
  foreach($data as $val)
  {
  ?>
   <option value="<?php echo $val->subcatid;?>">
   
   <?php echo $val->subcatname;?></option>
  
   <?php
  }
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
  
  
  public function updateproduct(Request $r1,$id)
    {
      $file= $r1->file('pimage');
      $file1= $r1->file('pimage1');
      $file2= $r1->file('pimage2');
      $file3= $r1->file('pimage3');
    
      if($file==""&&$file1==""&&$file2==""&&$file3=="")
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
    
      
      $data['returnpolicy']=$r1->input('pret');
      $data['freedelivery']=$r1->input('pdelyes');
      $data['returnable']=$r1->input('preturn');
  
      }

      elseif($file1==""&&$file2==""&&$file3=="")
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
    
      
      $data['returnpolicy']=$r1->input('pret');
      $data['freedelivery']=$r1->input('pdelyes');
      $data['returnable']=$r1->input('preturn');
  
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['image']=$filename;
      
    
    }

    
    elseif($file==""&&$file2==""&&$file3=="")
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
  
    
    $data['returnpolicy']=$r1->input('pret');
    $data['freedelivery']=$r1->input('pdelyes');
    $data['returnable']=$r1->input('preturn');

    $filename1 = $file1->getClientOriginalName();
    $file1->move(public_path().'/uploads/images', $filename1);
    $data['image1']=$filename1;
  
  
  }


  elseif($file==""&&$file1==""&&$file3=="")
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

  
  $data['returnpolicy']=$r1->input('pret');
  $data['freedelivery']=$r1->input('pdelyes');
  $data['returnable']=$r1->input('preturn');

  $filename2 = $file2->getClientOriginalName();
  $file2->move(public_path().'/uploads/images', $filename2);
  $data['image2']=$filename2;


}


elseif($file==""&&$file1==""&&$file2=="")
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


$data['returnpolicy']=$r1->input('pret');
$data['freedelivery']=$r1->input('pdelyes');
$data['returnable']=$r1->input('preturn');

$filename3 = $file3->getClientOriginalName();
$file3->move(public_path().'/uploads/images', $filename3);
$data['image3']=$filename3;


}


elseif($file2==""&&$file3=="")
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


$data['returnpolicy']=$r1->input('pret');
$data['freedelivery']=$r1->input('pdelyes');
$data['returnable']=$r1->input('preturn');

$filename = $file->getClientOriginalName();
$file->move(public_path().'/uploads/images', $filename);
$data['image']=$filename;


$filename1 = $file1->getClientOriginalName();
$file1->move(public_path().'/uploads/images', $filename1);
$data['image1']=$filename1;




}

elseif($file==""&&$file1=="")
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


$data['returnpolicy']=$r1->input('pret');
$data['freedelivery']=$r1->input('pdelyes');
$data['returnable']=$r1->input('preturn');

$filename2 = $file2->getClientOriginalName();
$file2->move(public_path().'/uploads/images', $filename2);
$data['image2']=$filename2;

$filename3 = $file3->getClientOriginalName();
$file3->move(public_path().'/uploads/images', $filename3);
$data['image3']=$filename3;



}

elseif($file=="")
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


$data['returnpolicy']=$r1->input('pret');
$data['freedelivery']=$r1->input('pdelyes');
$data['returnable']=$r1->input('preturn');

$filename1 = $file1->getClientOriginalName();
$file1->move(public_path().'/uploads/images', $filename1);
$data['image1']=$filename1;

$filename2 = $file2->getClientOriginalName();
$file2->move(public_path().'/uploads/images', $filename2);
$data['image2']=$filename2;

$filename3 = $file3->getClientOriginalName();
$file3->move(public_path().'/uploads/images', $filename3);
$data['image3']=$filename3;



}
elseif($file3=="")
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


$data['returnpolicy']=$r1->input('pret');
$data['freedelivery']=$r1->input('pdelyes');
$data['returnable']=$r1->input('preturn');

$filename1 = $file1->getClientOriginalName();
$file1->move(public_path().'/uploads/images', $filename1);
$data['image1']=$filename1;

$filename2 = $file2->getClientOriginalName();
$file2->move(public_path().'/uploads/images', $filename2);
$data['image2']=$filename2;

$filename = $file->getClientOriginalName();
$file->move(public_path().'/uploads/images', $filename);
$data['image']=$filename;

}

elseif($file==""&&$file3=="")
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


$data['returnpolicy']=$r1->input('pret');
$data['freedelivery']=$r1->input('pdelyes');
$data['returnable']=$r1->input('preturn');

$filename1 = $file1->getClientOriginalName();
$file1->move(public_path().'/uploads/images', $filename1);
$data['image1']=$filename1;

$filename2 = $file2->getClientOriginalName();
$file2->move(public_path().'/uploads/images', $filename2);
$data['image2']=$filename2;


}


     else
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
      
        
        $data['returnpolicy']=$r1->input('pret');
        $data['freedelivery']=$r1->input('pdelyes');
        $data['returnable']=$r1->input('preturn');
        
      $filename = $file->getClientOriginalName();
      $file->move(public_path().'/uploads/images', $filename);
      $data['image']=$filename;
    

      $filename1 = $file1->getClientOriginalName();
      $file1->move(public_path().'/uploads/images', $filename1);
      $data['image1']=$filename1;
    
      $filename2 = $file2->getClientOriginalName();
      $file2->move(public_path().'/uploads/images', $filename2);
      $data['image2']=$filename2;
    
      $filename3 = $file3->getClientOriginalName();
      $file3->move(public_path().'/uploads/images', $filename3);
      $data['image3']=$filename3;
    
   }
   
   



   
      $this->md1->updateproduct('product',$data,$id);
 
 
      return redirect('/vendorproduct');

 
    }

  
    public function addproduct(Request $r1,$id)
    {
 
      request()->validate([
        'pname'=>'required',
        'pgst'=>'required',
        'pdes'=>'required',
        'pcat'=>'required',
        'pprice'=>'required',
        'pmrp'=>'required',
        'pstock'=>'required',
        'pwar'=>'required',
        'pimage'=>'required',
        'pimage1'=>'required',
        'pimage2'=>'required',
        'pimage3'=>'required',
        
        'pbrand'=>'required'
        ]);
        $name=$r1->input('pname');
        $price=$r1->input('pprice');
        $stock=$r1->input('pstock');

        $data1=$this->md1->stockcheck('product',$name,$price);//function call from model to update
       
       
       
       
       
        if(!isset($data1))
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

  $file1= $r1->file('pimage1');
  $filename1 = $file1->getClientOriginalName();
  $file1->move(public_path().'/uploads/images', $filename1);
  $data['image1']=$filename1;

  $file2= $r1->file('pimage2');
  $filename2 = $file2->getClientOriginalName();
  $file2->move(public_path().'/uploads/images', $filename2);
  $data['image2']=$filename2;

  $file3= $r1->file('pimage3');
  $filename3 = $file3->getClientOriginalName();
  $file3->move(public_path().'/uploads/images', $filename3);
  $data['image3']=$filename3;

  $data['returnpolicy']=$r1->input('pret');
  $data['freedelivery']=$r1->input('pdelyes');
  $data['returnable']=$r1->input('preturn');
  

  $data['status']=0;
  $data['vendorid']=$id;
  
  $data['offerstatus']=0;
  
  
             
  $this->md1->addproduct('product',$data);
  

        return redirect('/vendorproduct');
        }  
else
{
  $r1->session()->put(array('pid'=>$data1->pid));
  $stockinc= session('pid');
   $this->md1->updatestock('product',$stock,$stockinc);
 
 
  return redirect('/vendorproduct');
}
      }
 
 




      public function addoffer(Request $r1)
      {
        request()->validate([
          'offpercentage'=>'required',
          'fromdate'=>'required', 'todate'=>'required',
          ]
      );
 
       
      $id=$r1->input('productid');
       $data['productid']=$id;

       $data['offerprice']=$r1->input('offprice');
    $data['offerpercentage']=$r1->input('offpercentage');
    $data['fromdate']=$r1->input('fromdate');
    $data['todate']=$r1->input('todate');
    $data['ofstatus']=0;
               
    $this->md1->addoffer('offer',$data);

    $data1['offerstatus']=1;
    $this->md1->updateproductstatus('product',$data1,$id);
 
    
  
          return redirect('/vendoroffer');
        }
   












        

        public function logout(Request $request)
    {
     
        $request->session()->forget('sesid');
        return redirect('/V');
    }

    public function  viewmyinformation($id)
    {
     

$ven=session('sesid');

       $data['result']=$this->md1->vendet('vendordetails',$ven);
   
      $data['res']=$this->md1->viewsingleproduct('product',$id);
     
      $data['catres']=$this->md1->showcatname('product','category','subcategory',$id);
     
      $data['resu']=$this->md1->viewcat('category');//view category while adding product
     
      $data['brandres']=$this->md1->viewbrand('addbrand');//view brand while adding product
     
     


     
      return view('vendor.vsingleproductinformation',$data);
    }
  
    
    public function  customerdetail($id)
    {
     

$ven=session('sesid');

       $data['result']=$this->md1->vendet('vendordetails',$ven);
     
       $data['cusresult']=$this->md1->cusdet('user',$id);
   

  
     
     print_r( $ven);
     
      return view('vendor.viewcustomer',$data);
    }




    public function  viewmyofferinformation($id)
    {
     

$ven=session('sesid');

       $data['result']=$this->md1->vendet('vendordetails',$ven);
   
      $data['res']=$this->md1->viewsingleproduct('product',$id);
     
      $data['catres']=$this->md1->showcatname('product','category','subcategory',$id);
  
  
     
     
     
      return view('vendor.vendorsingleofferinformation',$data);
    }

    public function  updateoffer($id)
    {
     

$ven=session('sesid');

       $data['result']=$this->md1->vendet('vendordetails',$ven);
   
       $data['offerresult']=$this->md1->offerresultof('offer','product',$id);
        
      $data['catres']=$this->md1->showcatname('product','category','subcategory',$id);
  
  
     
     
     
      return view('vendor.vendoroffermodify',$data);
    }

    public function  updateofferinformation(Request $r1,$id)
    {
       $ven=session('sesid');

       
       $data['offerprice']=$r1->input('offprice');
       $data['offerpercentage']=$r1->input('offpercentage');
       $data['fromdate']=$r1->input('fromdate');
       $data['todate']=$r1->input('todate');
       $data['ofstatus']=0;

       $this->md1->modifyoffer('offer',$data,$id);
 
 
       return redirect('/offeredproduct'); }




       public function ordertable(Request $request)
       {
         $id=session('sesid');
         $data['result']=$this->md1->vendet('vendordetails',$id);
         
         
         $data['res']=$this->md1->orderedproduct('ordertable','product','vendordetails','user',$id);
        
        
        

      
           return view('vendor.vendorordertable',$data);
        
       }
       




   
   
   



}
?>