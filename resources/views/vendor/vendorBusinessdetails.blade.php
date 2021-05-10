<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OneClick|Vendor</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/style.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

  <style>
* {
  box-sizing: border-box;
}

.row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  font-weight: bold;
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #9932CC, #FFA500);
  font-family: 'Roboto', sans-serif;
}


.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  width:250px;
  background-color: #8B4513;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);

</style>


 
</head>
<body>

  <form id="businessregiration_form" novalidate action="/businessdetails/{{session('sesid')}}"  method="post" class="brand" enctype="multipart/form-data"> 


  @csrf
  




<div class="row" >
  <div class="column">
<center><h1><b>Company information</b></h1></center>
  <table>
          <tr>
         <td> Company Name</td>
         <td><input type="text" class="form-control" id="companyname" placeholder="Name..." name="companyname"value="{{old('companyname')}}" >
    @error("companyname")
<p style="color:red">{{$errors->first("companyname","Enter your company name !")}}</p>
@enderror</td>
         </tr>
         
         <tr>
         <td>Office Number</td>
         <td><input type="text"class="form-control"  placeholder="Number..."id="officeno" name="officeno" maxlength="10"value="{{old('officeno')}}">
    @error("officeno")
<p style="color:red">{{$errors->first("officeno","Enter your office no !")}}</p>
@enderror</td>
         </tr>
         
         <tr>
         <td>State</td>
         <td>  <input value="KERALA" class="form-control" name="state"id="state" readonly></td>
         </tr>
         <tr>
         <td>District</td>
         <td><select name="district"class="form-control"id="district" class="form-control">
@error("district")
<p style="color:red">{{$errors->first("district","Select district !")}}</p>
@enderror
<option>District</option>
  
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
         <td>Location</td>
         <td><textarea type="text" placeholder="Company location..." id="location" name="location"class="form-control"value="{{old('location')}}"></textarea>
  @error("location")
<p style="color:red">{{$errors->first("location","Enter your office location !")}}</p>
@enderror</td>
         </tr>
         <tr>
         <td>Business Type</td>
         <td><select name="businesstype" id="businesstype" class="form-control" >
@error("businesstype")
<p style="color:red">{{$errors->first("businesstype","Select business type!")}}</p>
@enderror
<option>Choose..</option>
  @foreach($res as $val) <option value="{{$val->id}}">{{$val->name}}</option>
                      @endforeach
  </select></td>
         </tr>
         
         <tr>
         <td>Your Store Name</td>
         <td>  <input type="text" class="form-control" name="storename" id="storename"value="{{old('storename')}}">
    @error("storename")
<p style="color:red">{{$errors->first("storename","Enter store name !")}}</p>
@enderror</td>
         </tr>
     			    <tr>
         <td>Selling focused on</td>
         <td>  <input type="text" name="sellingcat" id="sellingcat" class="form-control"value="{{old('sellingcat')}}">
    @error("sellingcat")
<p style="color:red">{{$errors->first("sellingcat","Select your selling category !")}}</p>
@enderror </td>
         </tr>
         
         <tr>
         <td>Store Logo</td>
         <td> <input type="file" class="form-control" name="storelogo" id="storelogo"value="{{old('storelogo')}}">
    @error("storelogo")
<p style="color:red">{{$errors->first("storelogo","Select your store logo !")}}</p>
@enderror</td>
         </tr>
         


         
         
         
          </table>
  </div>

 
<br>

<div class="column">
<center><h1><b>Business information</b></h1></center>

    <table>
                <tr>
         <td>Trade License Number</td>
         <td><input type="text" class="form-control" name="tradelicenceno" id="tradelicenceno" value="{{old('tradelicenceno')}}"placeholder="Licence number...">
    @error("tradelicenceno")
<p style="color:red">{{$errors->first("tradelicenceno","Enter Trade license number !")}}</p>
@enderror</td>
         </tr>
         <tr>
         <td>Trade License Document</td>
         <td><input type="file" class="form-control" name="tradedocument" id="tradedocument"value="{{old('tradedocument')}}">
    @error("name")
<p style="color:red">{{$errors->first("name","Select the trade document's file !")}}</p>
@enderror</td>
         </tr>
         
         <tr>
         <td>GST Number</td>
         <td> <input type="text" class="form-control" name="gstnumber" id="gstnumber"value="{{old('gstnumber')}}">
    @error("gstnumber")
<p style="color:red">{{$errors->first("gstnumber","Enter GST  number!")}}</p>
@enderror</td>
         </tr>
         <tr>
         <td>GST Document</td>
         <td> <input type="file" class="form-control" name="gstdocument" id="gstdocument"value="{{old('gstdocument')}}">
    @error("gstdocument")
<p style="color:red">{{$errors->first("gstdocument","Select GST document file !")}}</p>
@enderror</td>
         </tr>
         
         <tr>
         <td>PAN Number</td>
         <td> <input type="text" class="form-control" name="panno" id="panno"value="{{old('panno')}}">
    @error("panno")
<p style="color:red">{{$errors->first("panno","Enter Pan number !")}}</p>
@enderror</td>
         </tr>
         <tr>
         <td>PAN Document</td>
         <td><input type="file" class="form-control" name="pandocument" id="pandocument"value="{{old('pandocument')}}">
    @error("pandocument")
<p style="color:red">{{$errors->first("pandocument","Select the pan document !")}}</p>
@enderror</td>
         </tr>
         <tr>
         <td>ID Proof</td>
         <td> <input type="file" class="form-control" name="iddocument" id="iddocument"value="{{old('iddocument')}}">
    @error("iddocument")
<p style="color:red">{{$errors->first("iddocument","Select the id proof !")}}</p>
@enderror</td>
         </tr>
          <tr>
         <td>FSSAI LIC.No</td>
         <td> <input type="text" class="form-control" placeholder="Optional"name="fssailicno" id="fssailicno"value="{{old('fssailicno')}}">
    
    </td>
         </tr> 
         <tr>
         <td>Shipping Mode</td>
         <td> <select name="shippingmode" id="shippingmode" class="form-control"value="{{old('shippingmode')}}">
    @error("shippingmode")
<p style="color:red">{{$errors->first("shippingmode","Select shipping mode !")}}</p>
@enderror
  <option>Choose..</option>
  <option value="cod">Cash On Delivery</option>
  <option value="onl">Online</option>
  
  </select></td>
         </tr>
 <td colspan="2"></td>
</table>
</div>
</div>


  <div class="row">
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <h1><b>Banking information</b></h1>

    <table>



<tr>
         <td>Your name in bank documents</td>
         <td><input type="text" class="form-control" id="nameinbank" placeholder="Name..." name="nameinbank"value="{{old('nameinbank')}}">
    @error("nameinbank")
<p style="color:red">{{$errors->first("nameinbank","Enter your name in bank document !")}}</p>
@enderror</td>
         </tr>
         
         <tr>
         <td>Account Type</td>
         <td>  <select name="accounttype" id="accounttype" class="form-control"value="{{old('accounttype')}}">
    @error("accounttype")
<p style="color:red">{{$errors->first("accounttype","Select your account type !")}}</p>
@enderror
  <option>Choose..</option>
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
         <td>Bank account number</td>
         <td> <input type="text"  class="form-control" name="accountno" placeholder="Account number" name="accountno"value="{{old('accountno')}}"></textarea>
    @error("accountno")
<p style="color:red">{{$errors->first("accountno","Enter account number !")}}</p>
@enderror</td>
         </tr>
         <tr>
         <td>Your bank IFSC code</td>
         <td><input type="text"  class="form-control" name="ifsccode" placeholder="IFSC Code" name="ifsccode"value="{{old('issccode')}}"></textarea>
    @error("ifsccode")
<p style="color:red">{{$errors->first("ifsccode","Enter IFSC code !")}}</p>
@enderror</td>
         </tr>
         <tr>
         <td>Canceled cheque</td>
         <td> <input type="file" class="form-control" name="cancelledcheque" id="cancelledcheque"value="{{old('cancelledcheque')}}">
    @error("cancelledcheque")
<p style="color:red">{{$errors->first("cancelledcheque","Select a cancelled cheque !")}}</p>
@enderror</td>
         </tr>
         <tr>
         <td>Signature</td>
         <td> <input type="file" class="form-control" name="signature" id="signature"value="{{old('signature')}}">
    @error("signature")
<p style="color:red">{{$errors->first("signature","Select signature!")}}</p>
@enderror</td>
         </tr>
   

<td colspan="2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" name="submit" class="button" value="Submit"  />
  </td>

         </table>
</div>
</div>










   <input type="hidden" class="form-control"name="regstatus" value="1">
    
    <input type="hidden" class="form-control"name="adminstatus" value="0">
    
    </form>
    </body>


</footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/js/val.js"></script>
</body>
</html>

</body>
</html>


