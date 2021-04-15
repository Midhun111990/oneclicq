<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminmodel;

class admincontroller extends Controller
{
  
    public $md1;
    public function __construct()
    {
        $this->md1= new adminmodel;

    }

    public function adminindex()
    {
        return view('admin.adminbody');
    }

    public function vinfo()
    {
        $data['result']=$this->md1->selectvinfo('vendordetails');
        return view('admin.vendorsinformation',$data);
    }

    public function catinfo()
    {
       
        $data['result']=$this->md1->catdetails('category');
       
        return view('admin.catinformation',$data);
    }


    public function addcat(Request $r1)
    {
        request()->validate(['catname'=>'required','catdes'=>'required',
        'catimage'=>'required|image','catcommission'=>'required']
    );
        $data['catname']=$r1->input('catname');
        $data['catdes']=$r1->input('catdes');
    
        $file= $r1->file('catimage');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/uploads/images', $filename);
        $data['catimage']=$filename;
    
        
        $data['catcommission']=$r1->input('catcommission');

        $this->md1->addcatinfo('category',$data);
  
   return redirect('/catinformation');


    }

    public function brandinfo()
    {
       
        $data['result']=$this->md1->branddetails('addbrand');
       
        return view('admin.brandinformation',$data);
          
    }
    
    public function addbrand(Request $r1)
    {
        request()->validate(['brandname'=>'required','brandimage'=>'required|image']
    );
        $data['brandname']=$r1->input('brandname');
        
        $file= $r1->file('brandimage');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/uploads/images', $filename);
        $data['brandlogo']=$filename;
    
        
        $this->md1->addbrandinfo('addbrand',$data);
  
   return redirect('/brandinformation');


    }

    public function addbusiness(Request $r1)
    {
        request()->validate(['businessname'=>'required']
    );
        $data['name']=$r1->input('businessname');
        $data['active']=$r1->input('status');
        
        $this->md1->addbusinessinfo('business',$data);
  
   return redirect('/businessinformation');


    }


    public function businessinfo()
    {
       
        $data['result']=$this->md1->businessdetails('business');
       
        return view('admin.businessinformation',$data);
    }


    public function  viewvendetail($id)
    {
        $data['result']=$this->md1->selectveninfo('vendordetails',$id);
         return view('admin.viewvendordetail',$data);
    }

    public function approved($id)
    {
       
        $data['adminstatus']=2;
  $this->md1->approved('vendordetails',$data,$id);

  return redirect('/vendorsinformation');
 
    }

    public function subcatinfo($id)
    {
   
        //  $data['resu']=$this->md1->subcatinformation('subcategory',$id);
       
        $data['result']=$this->md1->subcatdetails('category',$id);
       
        $data['res']=$this->md1->catnamecall('subcategory',$id);
          
        return view('admin.subcatinformation',$data);
    }


    public function addsubcat(Request $r1,$id)
    {

        request()->validate(['subcatname'=>'required','subcatimage'=>'required|image']
    );
        $data['catid']=$id;
       
        $data['subcatname']=$r1->input('subcatname');
        
        $file= $r1->file('subcatimage');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/uploads/images', $filename);
        $data['subcatimage']=$filename;
    
        
        
        $this->md1->addsubcatinfo('subcategory',$data);
  
   return redirect()->back();

}









public function  productinformation()
{
    $data['result']=$this->md1->proinformation('product');
     return view('admin.productinformation',$data);
}
public function viewmyinfo($id)
    {
     
      $data['result']=$this->md1->viewsingleproduct('product',$id);
     
     
      return view('admin.singleproductinformation',$data);
    }
  
    public function proapproved($id)
    {
        // $data['res']=$this->md1->viewbrand('addbrand');//view brand while adding product
     
        // $data['resu']=$this->md1->viewcat('category');//view category while adding product
       
  
        // $data['resl']=$this->md1->viewsubcat('subcategory');//view subcategory while adding product
       
        $data['status']=1;
  $this->md1->proapproved('product',$data,$id);

  return redirect('/productinformation');
 
    }


    public function pendingproduct()
    {

        $data['result']=$this->md1->penproduct('product');
        return view('admin.adminpendingproduct',$data);
    
 }

 public function deletebrandinformation($id) {
    $this->md1->deletebrand('addbrand',$id);
    return redirect('/brandinformation');
  
    }

    public function deletebusiness($id) {
        $this->md1->deletebus('business',$id);
        return redirect('/businessinformation');
      
        }


 
public function deletecatinformation($id) {
    $this->md1->deletecat('category',$id);
    return redirect('/catinformation');
  
    }


    public function  deletesubcatinformation($id) {
        $this->md1->deletesubcat('subcategory',$id);
        return redirect('/catinformation');
      
        }
     
   


    public function singlecatinformation($id) {
    
        $data['result']=$this->md1->viewsinglecat('category',$id);
     
     
        return view('admin.singlecatinformation',$data);
    }  

    public function singlebrandinformation($id) {
    
        $data['result']=$this->md1->viewsinglebrand('addbrand',$id);
     
     
        return view('admin.singlebrandinformation',$data);
    }

    public function singlesubcatinformation($id) {
    
        $data['result']=$this->md1->viewsinglesubcat('subcategory',$id);
     
     
        return view('admin.singlesubcatinformation',$data);
    }  

    public function updatecatinformation(Request $r1,$id) {
   
        request()->validate(['categoryname'=>'required','categorydes'=>'required',
        'categoryimage'=>'image','categorycommission'=>'required']);
       

        $file= $r1->file('categoryimage');
    
if($file=="")
{
        
        $data['catname']=$r1->input('categoryname');
        $data['catdes']=$r1->input('categorydes');
        $data['catcommission']=$r1->input('categorycommission');
    
    }
else
{
    $data['catname']=$r1->input('categoryname');
    $data['catdes']=$r1->input('categorydes');
    
    $data['catcommission']=$r1->input('categorycommission');
    $filename = $file->getClientOriginalName();
$file->move(public_path().'/uploads/images', $filename);
$data['catimage']=$filename;

}
$this->md1->updatecat('category',$data,$id);
return redirect('/catinformation');


    }    

    
    public function updatebrandinformation(Request $r1,$id) {
   
       

        $file= $r1->file('brandimage');
    
if($file=="")
{
        
        $data['brandname']=$r1->input('brandname');
    
    }
else
{
    $data['brandname']=$r1->input('brandname');
    $filename = $file->getClientOriginalName();
$file->move(public_path().'/uploads/images', $filename);
$data['brandlogo']=$filename;

}
$this->md1->updatebrand('addbrand',$data,$id);
return redirect('/brandinformation');






    }    
 
    public function updatesubcatinformation(Request $r1,$id) {
   
       

        $file= $r1->file('subcategoryimage');
    
if($file=="")
{
        
        $data['subcatname']=$r1->input('subcategoryname');
    
    }
else
{
    $data['subcatname']=$r1->input('subcategoryname');
    $filename = $file->getClientOriginalName();
$file->move(public_path().'/uploads/images', $filename);
$data['subcatimage']=$filename;

}
$this->md1->updatesubcat('subcategory',$data,$id);
return redirect('/catinformation');






    }    
 











    

    public function subcatinformation(Request $r1,$id) {
   
       

        $file= $r1->file('subcategoryimage');
    
if($file=="")
{
        
        $data['subcatname']=$r1->input('subcategoryname');
}
else
{
    $data['subcatname']=$r1->input('subcategoryname');
    
    $filename = $file->getClientOriginalName();
$file->move(public_path().'/uploads/images', $filename);
$data['subcatimage']=$filename;

}
$this->md1->updatesubcat('subcategory',$data,$id);
return redirect('/subcatinformation');






    }    
 



    public function aindex()
    {
        return view('admin.adminsignin');
    }


    public function asignin(Request $r1)
  {

    request()->validate([
      'email'=>'required|email',
      'pass'  =>'required']
  );

    
        $email=$r1->input('email');
        $pass=$r1->input('pass');
    
        
       $data=$this->md1->logcheck('adminlog',$email,$pass);//function call from model to insert
       
       if(isset($data))

   {
   
       return redirect('/admin');
          
    }
   else
       
   return back()->with('error', 'Incorrect username/ password!');
        

    }
        






}
?>