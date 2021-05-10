<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>OneClick</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="/dist/csss/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="/dist/csss/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="/dist/csss/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="/dist/csss/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/csss/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/csss?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="/dist/text/csss" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/csss/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/csss?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="/dist/csss/owl.carousel.min.css">
      <link rel="stylesoeet" href="/dist/csss/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>




   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-3">
                  <div class="logo"><a href="/customer"><img src="/dist/img/logo.png"><b>OneClick</b></a></div></div>
                  <div class="col-sm-9">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="#">Best Sellers</a></li>
                           <li><a href="#">New Releases</a></li>
                           <li><a href="#">Today's Deals</a></li>
                           <li></li><li></li>
                           <li><a href="/logoutcus">Logout</a></li>
                     <li><a href="/customerlog" style="color:White"><h2><b>Login</b></a>
                     </li>
                        </ul>
         
                     </div>
                     
                     @if(session()->has('email'))
                     @foreach($cusres as $value)
                   <b><center><a href="/customerlog">
                   <h2 style="color:White"><b> </b>{{$value->fname}}👶</b> @foreach($point as $po) {{$po->points}}💎   @endforeach</h2></a></center>
         
<a href="/mycart/{{$value->userid}}"><h2 style="color:White">Cart🛒</h2></a> 
@endforeach        
       @endif   

      

   </b>
                  </div>
            
               </div>
            
            </div>
                  
            </div>
        
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
           
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="/customer">Home</a>
                     


                  </div>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                     </button>

                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     @foreach($result as $val)                     
                     <a class="dropdown-item" href="/productshow/{{$val->catid}}">{{$val->catname}}</a>     
                     
                     @endforeach
                     </div>
                  </div>
                  
                   
                  <div class="main">
                     <!-- Another variation with a button -->
                     <form action="/search" method="GET" role="search">
            @csrf
            
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Product" name="term" id="term">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                      </div>
                      </form>
                  </div>
                  
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>



      </div>

 @yield('body')

<!-- footer section start -->
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2021 All Rights Reserved. Design by <a href="https://html.design">IROD Technologies</a></p>
            <div class="footer_logo"><a href="/customer"><img src="/dist/img/logo.png" width="100" height="120"></a><p  style="color:white;">ONECLICQ<p></div>
            <div class="location_main"><p style="color:white;"><b>Help Line  Number : +91 ##########></b></p></div>
       
            </div>  </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="/dist/jss/jquery.min.js"></script>
      <script src="/dist/jss/popper.min.js"></script>
      <script src="/dist/jss/bootstrap.bundle.min.js"></script>
      <script src="/dist/jss/jquery-3.0.0.min.js"></script>
      <script src="/dist/jss/plugin.js"></script>
      <!-- sidebar -->
      <script src="/dist/jss/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="/dist/jss/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>