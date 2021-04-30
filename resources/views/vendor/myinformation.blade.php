
@extends('vendor.vendordas')
@section('body')
@foreach($result as $value)



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><b>About </b><u>Me</u> & <u>My</u> Company</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/V">Home</a></li>
              <li class="breadcrumb-item active">Informations</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <form id="modifymydetail_form" novalidate action="/modify/{{$value->id}}"  method="post" class="brand" enctype="multipart/form-data"> 
  @csrf
  <div>
  <textarea readonly rows="3" cols="125" style=color:red>{{$value->reason}}</textarea>
    
    </div><!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Vendor</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Name</td>
                      <td><input type="text"class="form-control" id="name" name="name"value="{{$value->name}}"></td>
                      </tr>
                      <tr>
                      <td>2.</td>
                      <td>Mobile No.</td>
                      <td><input type="text"class="form-control" id="mob" maxlength="10"name="mob"value="{{$value->mob}}"></td>
                     </tr>
                    <tr>
                      <td>3.</td>
                      <td>E-mail</td>
                      <td><input type="text"class="form-control" id="email" name="email"value="{{$value->email}}"></td>
                     </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                
              </div>
            
            
            </div>
            <!-- /.card -->

          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Company</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
               <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Company name</td>
                      <td><input type="text"class="form-control" id="companyname" name="companyname"value="{{$value->companyname}}"></td>
                     </tr>
                    <tr>
                      <td>2.</td>
                      <td>Office nuber</td>
                      <td><input type="text"class="form-control" id="officeno" name="officeno"maxlength="10"value="{{$value->officeno}}"></td>
                     </tr>
                     <tr>
                      <td>3.</td>
                      <td>State</td>
                      <td><input type="text"class="form-control" id="state" name="state"value="KERALA"></td>
                     </tr>
                    <tr>
                      <td>4.</td>
                      <td>District</td>
                      <td>
                      <select name="district"class="form-control"id="district" class="form-control">

<option>{{$value->district}}</option>
  
<option value="Thiruvananthapuram">Thiruvananthapuram</option>
<option value="Kollam">Kollam</option>
<option value="Alappuzha">Alappuzha</option>
<option value="Pathanamthitta">Pathanamthitta</option>
<option value="Kottayam">Kottayam</option>
<option value="Idukki">Idukki</option>
<option value="Ernakulam">Ernakulam</option>
<option value="Thrissur">Thrissur</option>
<option value="Palakkad">Palakkad</option>
<option value="Malappuram">Malappuram</option>
<option value="Kozhikode">Kozhikode</option>
<option value="Wayanad">Wayanad</option>
<option value="Kannur">Kannur</option>
<option value="Kasaragod">Kasaragod</option>
  
  </select>

                      
                      </td>
                     </tr>
                     <tr>
                      <td>5.</td>
                      <td>Location</td>
                      <td><input type="text"class="form-control" id="location" name="location"value="{{$value->location}}"></td>
                     </tr>
                    <tr>
                      <td>6.</td>
                      <td>Business type</td>
                      <td><select name="businesstype" id="businesstype" class="form-control" required>
@error("businesstype")
<p style="color:red">{{$errors->first("businesstype","Select business type!")}}</p>
@enderror
<option>{{$value->businesstype}}</option>
  @foreach($res as $val) <option value="{{$val->id}}">{{$val->name}}</option>
                      @endforeach
  </select>

                      </td>
                     </tr>                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
<input type="submit" name="submit" class="submit btn btn-success" style="height:100px;width:520px;font-size : 25px"value="MODIFY ⚡" >

            <!-- /.card -->
          </div>
          <!-- /.col -->




          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Store</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
              <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Store Name</td>
                      <td><input type="text"class="form-control" id="storename" name="storename"value="{{$value->storename}}"></td>
                     </tr>                   
                      <tr>
                      <td>2.</td>
                      <td>Selling Categories</td>
                      <td><input type="text"class="form-control" id="sellingcat" name="sellingcat"value="{{$value->sellingcat}}"></td>
                     </tr>
                    <tr>
                      <td>3.</td>
                      <td>Store Logo</td>
                      <td><a href="{{asset('uploads/images/'.$value->storelogo)}}"><h4 align="center">VIEW👁</h4></a>
                      <input type="file" class="form-control" name="storelogo" id="storelogo">
                      
   </td>
                    </tr>
                    
                  </tbody>
                </table>



              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bank</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
              <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Name in bank documents</td>
                      <td><input type="text"class="form-control" id="nameinbank" name="nameinbank"value="{{$value->nameinbank}}"></td>
                     </tr>
                      <tr>
                      <td>2.</td>
                      <td>Account type</td>
                     <td> <select name="accounttype" id="accounttype" class="form-control"value="{{$value->accounttype}}">
    @error("accounttype")
<p style="color:red">{{$errors->first("accounttype","Select your account type !")}}</p>
@enderror
  <option> {{$value->accounttype}}</option>
  <option value="current">Current account</option>
  <option value="saving">Savings account</option>
  <option value="salary">Salary account</option>
  <option value="fixed">Fixed deposit account</option>
  <option value="deposit">Recurring deposit account</option>
  <option value="nri">NRI accounts</option>
  <option value="nro">Non-resident ordinary (NRO) savings accounts</option>
  <option value="nre">Non-resident external (NRE) savings accounts </option>
  <option value="fcnr">Foreign currency non-resident (FCNR) account </option>
  
  </select></td>
                      </tr>
                    <tr>
                      <td>3.</td>
                      <td>Bank account number</td>
                      <td><input type="text"class="form-control" id="accountno" name="accountno"value="{{$value->accountno}}"></td>
                     </tr>
                    <tr>
                      <td>4.</td>
                      <td>IFSC Code</td>
                      <td><input type="text"class="form-control" id="ifsccode" name="ifsccode"value="{{$value->ifsccode}}"></td>
                     </tr>
                    <tr>
                      <td>5.</td>
                      <td>Canceled cheque</td>
                     <td><a href="{{asset('uploads/images/'.$value->cancelledcheque)}}"><h4 align="center">VIEW👁</h4></a>
                     <input type="file" class="form-control" name="cancelledcheque" id="cancelledcheque">
    @error("cancelledcheque")
<p style="color:red">{{$errors->first("cancelledcheque","Select a cancelled cheque !")}}</p>
@enderror
                     </td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Signature</td>
                      <td><a href="{{asset('uploads/images/'.$value->signature)}}"><h4 align="center">VIEW👁</h4></a>
                      <input type="file" class="form-control" name="signature" id="signature">
    @error("signature")
<p style="color:red">{{$errors->first("signature","Select a cancelled cheque !")}}</p>
@enderror 
                      </td>
                    </tr>
                  </tbody>
                </table>

              </div>
</div>
</div>



</div>
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Business</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
               <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Trade Licence no.</td>
                      <td><input type="text"class="form-control" id="tradelicenceno" name="tradelicenceno"value="{{$value->tradelicenceno}}"></td>
                     </tr>
                      <tr>
                      <td>2.</td>
                      <td>Trade Licence Document</td>
                      <td><a href="{{asset('uploads/images/'.$value->tradedocument)}}"><h4 align="center">VIEW👁</h4></a>
                      <input type="file" class="form-control" name="tradedocument" id="tradedocument">
    @error("tradedocument")
<p style="color:red">{{$errors->first("tradedocument","Select a cancelled cheque !")}}</p>
@enderror             
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>GST no.</td>
                      <td><input type="text"class="form-control" id="gstno" name="gstno"value="{{$value->gstno}}"></td>
                     </tr>
                     <tr>
                      <td>4.</td>
                      <td>GST Document</td>
                      <td><a href="{{asset('uploads/images/'.$value->gstdocument)}}"><h4 align="center">VIEW👁</h4></a>
                      <input type="file" class="form-control" name="gstdocument" id="gstdocument">
    @error("gstdocument")
<p style="color:red">{{$errors->first("gstdocument","Select gstdocument !")}}</p>
@enderror             
                      </td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>PAN no.</td>
                      <td><input type="text"class="form-control" id="panno" name="panno"value="{{$value->panno}}"></td>
                     </tr>
                    <tr>
                      <td>6.</td>
                      <td>PAN Document</td>
                      <td><a href="{{asset('uploads/images/'.$value->pandocument)}}"><h4 align="center">VIEW👁</h4></a>
                      <input type="file" class="form-control" name="pandocument" id="pandocument">
    @error("pandocument")
<p style="color:red">{{$errors->first("pandocument","Select pandocument !")}}</p>
@enderror             
                      </td>
                    </tr>
                    <tr>
                      <td>7.</td>
                      <td>ID Proof</td>
                      <td><a href="{{asset('uploads/images/'.$value->iddocument)}}"><h4 align="center">VIEW👁</h4></a>
                      <input type="file" class="form-control" name="iddocument" id="iddocument">
    @error("iddocument")
<p style="color:red">{{$errors->first("iddocument","Select iddocument !")}}</p>
@enderror             
                      </td>
                    </tr>
                    <tr>
                      <td>8.</td>
                      <td>FSSAI LIC.No</td>
                      <td><input type="text"class="form-control" id="fssaino" name="fssaino"value="{{$value->fssaino}}"></td>
                     </tr>
                    <tr>
                      <td>9.</td>
                      <td>Shipping Mode</td>
                      <td>              
                      <select name="shippingmode" id="shippingmode" class="form-control" >
    @error("shippingmode")
<p style="color:red">{{$errors->first("shippingmode","Select shipping mode !")}}</p>
@enderror
<option>{{$value->shipping}}</option>

  <option value="Cash on delivery">Cash On delivery</option>
  <option value="Online">Online</option>
  
  </select>
  </td>
                    </tr>
                    <tr>
                    <td></td>
                    

</tr>
                  </tbody>
                </table>
               
                </div>
               
                </div>
               
                </div>
               
                </div>




</body>

</html>
</form>
@endforeach
@endsection












