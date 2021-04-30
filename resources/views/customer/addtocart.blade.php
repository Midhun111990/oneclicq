@extends('customer.customerdas')
@section('body')

 @foreach($proresult as $value)
                       
                               

                             

<style>

.container {
  max-width: 1000px;
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
 <div>
   <img src="{{asset('uploads/images/'.$value->image)}}"height="100px" width="100px"     >
   <h3>{{$value->name}}</h3>
   <p>Price💰&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$value->price}}₹</p>
   <p>MRP💰&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
     &nbsp<strike>{{$value->mrp}}</strike>₹</p>
 </div>


   <!-- Product Configuration -->
   <div class="product-configuration">

     <!-- Product Color -->
     
     <!-- Cable Configuration -->
     <div class="cable-config">
       <span>Purchase +</span>

      

       <a href="/purchase" style="font-size: 100px;"> ♥ </a>
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






