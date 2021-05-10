@extends('customer.customerdas')
@section('body')
@foreach($proresult as $value)



<form id="applicationreject_form" novalidate action="/addtocart/{{$value->pid}}"   method="post" class="cat" enctype="multipart/form-data"> 
  @csrf
  
                                

                             

<style>

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
}
  .left-column {
  width: 65%;
  position: relative;
}
 
.right-column {
  width: 35%;
  margin-top: 60px;
}
.left-column img {
  width: 80%;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  transition: all 0.3s ease;
}
 
.left-column img.active {
  opacity: 1;
}
.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.product-description span {
  font-size: 30px;
  color: #358ED7;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
}
.product-description h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;
}
.product-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}

</style>
<main class="container">
 
 <!-- Left Column / Headphones Image -->
 <div >
   <img src="{{asset('uploads/images/'.$value->image)}}"height="400px" width="500px"     >
   
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>


   <div >
   <br><br><br><br><br><br><br><br>
   <img src="{{asset('uploads/images/'.$value->image1)}}"height="80px" width="100px"     >
   <br>
   <img src="{{asset('uploads/images/'.$value->image2)}}"height="80px" width="100px"     >
   <br>
   <img src="{{asset('uploads/images/'.$value->image3)}}"height="80px" width="100px"     >
   
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>

 <!-- Right Column -->
 <div class="right-column">

   <!-- Product Description -->
   <div class="product-description">
     <span><h1>{{$value->name}}</h1></span>
     <p style="color:black;">{{$value->description}}</p>

</div>    
 <div>

   
 <p style="color:black;"><u>Our Price💰</u>&nbsp&nbsp{{$value->price}}₹
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     <br>
    <br>
     <u> MRP💰</u>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<strike>{{$value->mrp}}</strike>₹</p>
     <p style="color:black;">Height ({{$value->height}}cm)
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   
     
     Weight ({{$value->weight}}cm)</p>
     <p style="color:black;"> Width ({{$value->width}}cm)
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     Length ({{$value->length}}cm)</p>
     
     </div>
     <div class="product-configuration">
      <p>{{$value->otherbrand}}</p>  
      
      <p><h2>GST &nbsp&nbsp➳<span>&nbsp&nbsp{{$value->gst}}%</span></h2></p> 
     <h3> <u>Warranty details</u><p>✺{{$value->warrantydetails}}</p></h3>
     
     <p style="color:black;">  @if($value->freedelivery==1)
     ✪ Free delivery
      @else 
      
      @endif</p>
      <p style="color:black;">  @if($value->returnable==1)
      ✪ Product is returnable
      @else
      
      @endif</p>
      <p style="color:black;">  @if($value->returnpolicy==1)
      ✪ Return policy
      @else 
      
      @endif</p>
    
   
<input type="hidden" id="time" name="time">
 
<script>
var today = new Date();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  document.getElementById("time").value = time;
</script>


    
     </div>

   <!-- Product Configuration -->
   <div class="product-configuration">

     <!-- Product Color -->
     
     <!-- Cable Configuration -->
     <div class="cable-config">
      
       <input type="hidden" name="pid" id="pid"class="form-control" value="{{$value->pid}}" />
       
       @if(session()->has('email'))
       @foreach($cusres as $val)
       <input type="hidden" name="userid" id="userid"class="form-control" value="{{$val->userid}}" />
                
  @endforeach        
        @endif   
<div class="row">
       <input type="submit" name="submit" class="submit btn btn-success" value="Purchase💰  " style="height:40px;width:150px;font-size: 20px;">   
   <!-- working      -->
   &nbsp&nbsp&nbsp&nbsp <input type="button" id="cart" name="cart" value="cart">
      
       
       &nbsp&nbsp&nbsp&nbsp <a href="/productaddtocart/{{$value->pid}}"><h1>🛒 </h1></a>
     
     </div>  
     </div>
   </div>

   
   <div class="cable-config">
       <span></span>

      

      
     </div>
   </div>


       
     </div>
   </div>

   
</main>

</div>
</div>
</div>
@endforeach








@endsection



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
     
     $(document).ready(function(){
       
    $("#cart").on('click', function()
    
    {
      
      var userid=$("#userid").val();
      var pid=$("#pid").val();
    
    $.ajax({
        type:"post",
        url:"/productaddtocart/{{$value->pid}}"+userid+pid,

        success:function(result)
        {
          alert('hi');
        }
        
      });
      // $("#sub").show();
  });
     });
    </script>      
        




        