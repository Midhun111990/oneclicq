@extends('customer.customerdas')
@section('body')
                        @foreach($proresult as $value)
                       
                               

                             

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
   <img src="{{asset('uploads/images/'.$value->image)}}"height="500px" width="500px"     >
 </div>


 <!-- Right Column -->
 <div class="right-column">

   <!-- Product Description -->
   <div class="product-description">
     <span>Headphones</span>{{$value->catid}}
     <h1>{{$value->name}}</h1>
     <p>{{$value->description}}</p>

</div>     <div class="product-configuration">

   
     <p><u>Our Price💰</u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$value->price}}₹
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     &nbsp&nbsp
     <u> MRP💰</u>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     &nbsp&nbsp&nbsp<strike>{{$value->mrp}}</strike>₹</p>
     <p>Height ({{$value->height}}cm)
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     &nbsp&nbsp&nbsp&nbsp
     
     Weight ({{$value->weight}}cm)</p>
    <p> Width ({{$value->width}}cm)
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     Length ({{$value->length}}cm)</p>
     
     </div>
     <div class="product-configuration">
      <p>{{$value->otherbrand}}</p>  
      
      <p><h2>GST &nbsp&nbsp➳<span>&nbsp&nbsp{{$value->gst}}%</span></h2></p> 
     <h3> <u>Warranty details</u><p>✺{{$value->warrantydetails}}</p></h3>
     
     <p> @if($value->freedelivery==1)
     ✪ Free delivery
      @else 
      
      @endif</p>
      <p> @if($value->returnable==1)
      ✪ Product is returnable
      @else
      
      @endif</p>
      <p> @if($value->returnpolicy==1)
      ✪ Return policy
      @else 
      
      @endif</p>
    
   
    
    
     </div>

   <!-- Product Configuration -->
   <div class="product-configuration">

     <!-- Product Color -->
     
     <!-- Cable Configuration -->
     <div class="cable-config">
       <span>ADD to Cart +</span>

      

       <a href="#" style="font-size: 100px;"> ♥ </a>
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