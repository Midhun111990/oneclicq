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


 
public function deletecatinformation($id) {
    $this->md1->deletecat('category',$id);
    return redirect('/catinformation');
  
    }
    public function updatecatinformation(Request $r1,$id) {
        $file= $r1->file('catimage');
        $data['catname']=$r1->input('catname');
        $data['catdes']=$r1->input('catdes');
        
        $data['catcommission']=$r1->input('catcommission');
        $filename = $file->getClientOriginalName();
    $file->move(public_path().'/uploads/images', $filename);
    $data['catimage']=$filename;
    $this->md1->updatecat('category',$data,$id);
    return redirect('/catinformation');


    }    
 










}
?>