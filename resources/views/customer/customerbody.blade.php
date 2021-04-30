@extends('customer.customerdas')
@section('body')

 <!-- electronic section start -->
 <div class="fashion_section">

         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">We Provide......</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                        @foreach($result as $value)
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                             <p style="color:red;font-size:160%;"><b><a href="/productshow/{{$value->catid}}">{{$value->catname}}</a></b></p>

                                 <div class="electronic_img"><a href="/productshow/{{$value->catid}}"> <img src="{{asset('uploads/images/'.$value->catimage)}}"height="200px" width="180px" /></a>
           </div>
                                 <div class="btn_main">
                                    <!-- <div class="buy_bt"><a href="#">Buy Now</a></div> -->
                                    <div class="seemore_bt"><a href="/productshow/{{$value->catid}}">See More</a></div>
                                 </div>
                              </div>
                          
                           </div> @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
             


      @endsection