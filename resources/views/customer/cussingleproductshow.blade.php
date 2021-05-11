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

div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
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
      <!-- <p><span>{{$value->otherbrand}}</span></p>   -->
      
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
  <br>
  <br>
   
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

        <textarea  placeholder="Commentssssssssss" rows="3" cols="60" style="color:Black;" id="comment" name="comment"></textarea>
        <br>
        <br>
  
<div class="row">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" name="submit" class="submit btn btn-success" value="Purchase💰  " style="height:40px;width:150px;font-size: 20px;">   
   <!-- working      -->

   &nbsp&nbsp&nbsp&nbsp <input type="button" id="cart" name="cart" value="cart">
      
       
       &nbsp&nbsp&nbsp&nbsp <a href="/productaddtocart/{{$value->pid}}"><h1>🛒 </h1></a>
     
     </div>  
     </div>
   </div>

   
   <div class="cable-config">
       <span></span>

      

     </div>
     <br>
     <br>
     <br>
     <br>
     <br>
      
 
   </div>


       
     </div>
   </div>

   
</main>

</div>
</div>
</div> 

<div class="stars" id="star" name="star">
    <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" value="4"id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" value="3"id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2"value="2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" value="1"id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
</div>
<center><h1> <b>Public Comments 📝</b></h1></center>
@foreach($feedresult as $va)
<textarea readonly rows="1" cols="260" style="color:Black;" id="pcomment" name="pcomment">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp✏️{{$va->comment}}</textarea>
    

    
@endforeach
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
        




        