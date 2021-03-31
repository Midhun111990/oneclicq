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
  <style>
   #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
  .login{
    max-width: 500px;
    margin: auto;
    padding: 20px;
    margin-top: 10px; 
  }
  </style>
</head>
<body>

<div class="row">
<div class="col-sm-5 content">
    <img src="dist/img/logo.png">
    <p><b>OneClick</b><br>India's First Regional Online Shopping</p>
    
<p>
<b>Why OneClick?</b><br>
E-Commerce today is a way of life and an extremely integral part 
of modern day shopping. OneClick presents in front of you, a unique
 online shopping experience with its huge variety of products from numerous
  categories, making it a one stop shop for all daily needs. We are proud to 
  announce that OneClick today is the only e-commerce platform which features
   a huge variety of indigenous products from the God’s Own Country Kerala, and
    we are featuring sellers exclusively from Kerala and there by truly standing
     by our tagline of the only Regional Shopping Portal in India. Join OneClick 
     today and be a part of the beginning of a brand new era in the e-commerce industry.
</p>
</div>
<div class="col-sm-7">
<div class="bg-img">
<div class="login">
<div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>

  @foreach($result as $value)
 

  <form id="regiration_form" novalidate action="/businessdetails/{{$value->id}}"  method="post" class="reg" enctype="multipart/form-data"> 
 
 
  @csrf
  <fieldset>
  <!-- @foreach($result as $value)
  <input type="text" class="form-control" id="pno" name="pno" value=' {{$value->id}}'>
    @endforeach -->
    <h2>Step 1: Company Information:</h2>
    <div class="form-group">
    <label for="companyname">Company Name</label>
    <input type="text" class="form-control" id="companyname" placeholder="Name..." name="companyname">
    </div>
    <div class="form-group">
    <label for="officeno">Office Number</label>
    <input type="text"class="form-control" placeholder="Number..." name="officeno">
  </div>
  
  <div class="form-group">
    <label for="state">State</label>
  <input value="KERALA" class="form-control"name="state"id="state" readonly>
  </div>

 
  <div class="form-group">
    <label for="district">District</label>
  
<select name="district"class="form-control"id="district" class="form-control">
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
  
  </div>

  
  <div class="form-group">
    <label for="location">Location</label>
  <input type="text" placeholder="Location..." id="location" name="location"class="form-control">
</div>
<div class="form-group">
    <label for="businesstype">Business Type</label>

<select name="businesstype" id="businesstype" class="form-control">
  
  <option>Choose..</option>
  <option value="individualsolo">Individual/Solo</option>
  Partnesrship
  </select>
</div>

  <input type="button" name="password" class="next btn btn-info" value="Next" id="step1" />
  </fieldset>
  <fieldset>
    <h2> Step 2: Business Details</h2>
    <div class="form-group">
    <label for="tradelicenceno">Trade License Number</label>
    <input type="text" class="form-control" name="tradelicenceno" id="tradelicenceno" placeholder="Licence number...">
    </div>
    <div class="form-group">
    <label for="tradedocument">Trade License Document</label>
    <input type="file" class="form-control" name="tradedocument" id="tradedocument">
    </div>
    <div class="form-group">
    <label for="gstnumber">GST Number</label>
    <input type="text" class="form-control" name="gstnumber" id="gstnumber">
    </div>
    <div class="form-group">
    <label for="gstdocument">GST Document</label>
    <input type="file" class="form-control" name="gstdocument" id="gstdocument">
    </div>
    <div class="form-group">
    <label for="panno">PAN Number</label>
    <input type="text" class="form-control" name="panno" id="panno">
    </div>
    <div class="form-group">
    <label for="pandocument">PAN Document</label>
    <input type="file" class="form-control" name="pandocument" id="pandocument">
    </div>
    <div class="form-group">
    <label for="iddocument">ID Proof</label>
    <input type="file" class="form-control" name="iddocument" id="iddocument">
    </div>
    <div class="form-group">
    <label for="fssailicno">FSSAI LIC.No</label>
    <input type="text" class="form-control" name="fssailicno" id="fssailicno">
    </div>    
    <div class="form-group">
    <label for="shippingmode">Shipping Mode</label>
    <select name="shippingmode" id="shippingmode" class="form-control">
  
  <option>Choose..</option>
  <option value="cod">Cash On Delivery</option>
  
  </select>

    </div>

    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
      <input type="button" name="next" class="next btn btn-info" value="Next" />
  </fieldset>
  <fieldset>
    <h2>Step 3: Store Information</h2>
    <div class="form-group">
    <label for="storename">Your Store Name</label>
    <input type="text" class="form-control" name="storename" id="storename">
    </div>
    <div class="form-group">
    <label for="sellingcat">Your Selling Categories</label>
    <select name="sellingcat" id="sellingcat" class="form-control">
  
  <option>Choose..</option>
  <option value="menswardrobe">Mens Wardrobe</option>
  
  </select>
</div>
    <div class="form-group">
    <label for="storelogo">Store Logo</label>
    <input type="file" class="form-control" name="storelogo" id="storelogo">
    </div>
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <input type="button" name="next" class="next btn btn-info" value="Next" />
  </fieldset>
 
 
 
  <fieldset>
    <h2>Step 4: Bank Details</h2>
    <div class="form-group">
    <label for="vendorname">Your name in bank documents</label>
    <input type="text" class="form-control" id="vendorname" placeholder="Name..." name="vendorname">
    </div>
    <div class="form-group">
    <label for="actype">Account Type</label>
    <select name="actype" id="actype" class="form-control">
  
  <option>Choose..</option>
  <option value="current">Current</option>
  
  </select>
</div>
    <div class="form-group">
    <label for="accountno">Bank account number</label>
    <input type="text"  class="form-control" name="accountno" placeholder="Account number" name="accountno"></textarea>
    </div>
    <div class="form-group">
    <label for="ifsccode">Your bank IFSC code</label>
    <input type="text"  class="form-control" name="ifsccode" placeholder="IFSC Code" name="ifsccode"></textarea>
    </div>
    <div class="form-group">
    <label for="cancelledcheque">Canceled cheque</label>
    <input type="file" class="form-control" name="cancelledcheque" id="cancelledcheque">
    </div>
    <div class="form-group">
    <label for="signature">Signature</label>
    <input type="file" class="form-control" name="signature" id="signature">
    </div>
    <input type="hidden" class="form-control"name="regstatus" value="1">
    
    <input type="hidden" class="form-control"name="adminstatus" value="0">
    
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
  </fieldset>
  
  </form>
  
@endforeach
</div>
</div>
</div>



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
</body>
</html>
<body>

<script>
$(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
   
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });

  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  }
});
</script>

</body>
</html>


