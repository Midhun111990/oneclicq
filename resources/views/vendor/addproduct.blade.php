
@extends('vendor.vendordas')
@section('body')    



<form method="post" action="/addproduct"enctype="multipart/form-data">
    @csrf
    @foreach($result as $value)

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
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
</head>
<body>

<div class="row">
<div class="col-sm-5 content">
    <img src="dist/img/logo.png">
    <p><b>OneClick</b><br>India's First Regional Online Shopping</p>
    
</div>
<div class="col-sm-7">
<div class="bg-img">
<div class="login">
<div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>

 

 
 
  @csrf
  <fieldset>
  <!-- @foreach($result as $value)
  <input type="text" class="form-control" id="pno" name="pno" value=' {{$value->id}}'>
    @endforeach -->
    <h2>Basic Information</h2>
    <div class="form-group">
    <label for="productname">Product Name</label>
    <input type="text" class="form-control" id="productname" placeholder="Name..." name="productname">
    </div>
    <div class="form-group">
    <label for="description">Description</label>
    <input type="text"class="form-control" placeholder="description" name="description">
  </div>
  
  <div class="form-group">
    <label for="brand">Brand</label>
  <input class="form-control"name="brand"id="brand" >
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


@endsection























