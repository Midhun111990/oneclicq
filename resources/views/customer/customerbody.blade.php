@extends('customer.customerdas')
@section('body')

@foreach ($posts as $post)
@if($posts->isNotEmpty())
<div class="container">
                        <div class="row">
                             
                              <div class="col-lg-3 col-sm-0">
                              

                                  <div class="box_main">
 
                                     <p style="color:red;font-size:160%;"><b>{{$post->name}}</b></p>
                                        <div class="electronic_img"><a href="/singleproductshow/{{$post->pid}}"><img src="{{asset('uploads/images/'.$post->image)}}"height="200px" width="180px" /></a>
                                        <p style="color:red;font-size:120%;"><b> &nbsp&nbsp&nbsp&nbsp{{$post->description}}&nbsp</b></p>
                                        <p style="color:red;font-size:120%;"><b> &nbsp&nbsp&nbsp&nbsp{{$post->price}}&nbsp</b></p>
                             </div>
                  
                                     </div>
                  
                           </div>
                  
                       </div>
                  
                    </div>
                  
                    @else 
                     <h2>No posts found</h2>
             @endif
             @endforeach 

                 
                 
                 

 <!-- banner section start -->
 <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <img src="uploads/images/ban2.jpg">
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <img src="uploads/images/ban1.jpg">
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                             <img src="uploads/images/ban3.PNG">
                           </div>
                        </div>
                     </div>
                     
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
 <!-- electronic section start -->
 <div class="fashion_section">

         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                  <br>
                  <br>
                     <h1 class="fashion_taital">We Provide......</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                        @foreach($result as $value)
                        <br>
                        <br>
                           <div class="col-lg-2 col-sm-3">
                              <div class="box_main">
                             <p style="color:red;font-size:160%;"><b><a href="/productshow/{{$value->catid}}">{{$value->catname}}</a></b></p>

                                 <div class="electronic_img"><a href="/productshow/{{$value->catid}}"> <img src="{{asset('uploads/images/'.$value->catimage)}}"height="200px" width="180px" /></a>
           </div>
                                 <div class="btn_main">
                                    <!-- <div class="buy_bt"><a href="#">Buy Now</a></div> -->
                                    </div>
                              </div>
                          
                           </div> @endforeach
                           </div>   </div>
                        </div>
                     </div>
                     </div>   </div>
                        </div>
                     </div>
                  </div>
               </div>
             


      @endsection