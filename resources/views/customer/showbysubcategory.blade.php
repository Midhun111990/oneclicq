@extends('customer.customerdas')
@section('body')



 <!-- electronic section start -->
 <div class="fashion_section">
         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="fashion_section_2">
                        <div class="row">
                             @foreach($catres as $value) 
                                  <h1 class="fashion_taital">{{$value->catname}}</h1>
                              @endforeach
                              @foreach($resultpro as $value)
                              <div class="col-lg-3 col-sm-0">
                                  <div class="box_main">
                                     <p style="color:red;font-size:160%;"><b>{{$value->name}}</b></p>
                                        <div class="electronic_img"><a href="/singleproductshow/{{$value->pid}}"><img src="{{asset('uploads/images/'.$value->image)}}"height="200px" width="180px" /></a>
                                        <p style="color:red;font-size:120%;"><b> &nbsp&nbsp&nbsp&nbsp{{$value->description}}&nbsp</b></p>
                                        <p style="color:red;font-size:120%;"><b> &nbsp&nbsp&nbsp&nbsp{{$value->price}}&nbsp</b></p>
                
                                        @foreach($ofprice as $v) 
                                  
                                  <p style="color:red;font-size:120%;"><b> &nbsp&nbsp&nbsp&nbsp{{$v->offerprice}}&nbsp RS</b></p>
                           @endforeach
                                        </div>
                                     </div>
                               </div> @endforeach
                           </div>
                       </div>
                    </div>
              </div>
            </div>
    </div>  
    </div>  
    </div>


      @endsection