
@extends('admin.admindas')
@section('body')




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/V">Home</a></li>
              <li class="breadcrumb-item active">Offer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              

                <h3 class="card-title">Add Offer +  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                          
                     <h1>Offered Products 🎉</h1>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  
                  <tbody>
                 
                    <tr style="color:white;background-color:black;">
                    <td>Sr.no</td>
                    
                    
                    <td>Image</td>
                      <td>Name</td>
                      <td>Original Price</td>
                       <td>Offered price</td>
                       <td>FROM date</td>
                      
                      <td>End date</td>

                      <td>Approve/Reject</td>
                      <td>Status</td>
                     
                   </tr>
                      <tr>
                     
                      @foreach($offerresult as $value)  
                     
                      <td align="center">{{$loop->iteration}}</td>     
                     
                      <td><a href="{{asset('uploads/images/'.$value->image)}}"> <img src="{{asset('uploads/images/'.$value->image)}}"height="60px" width="30px" /></a>
          <a href="{{asset('uploads/images/'.$value->image1)}}">  <img src="{{asset('uploads/images/'.$value->image1)}}"height="60px" width="30px" /></a>
          <a href="{{asset('uploads/images/'.$value->image2)}}"> <img src="{{asset('uploads/images/'.$value->image2)}}"height="60px" width="30px" /></a>
          <a href="{{asset('uploads/images/'.$value->image3)}}"> <img src="{{asset('uploads/images/'.$value->image3)}}"height="60px" width="30px" /></a>
             </td>    
                      <td>{{$value->name}}</td>
                      <td><h2 style="background-color:#ff726f;">&nbsp&nbsp{{$value->price}}</h2></td>
                      <td><h2 style="background-color:Chartreuse;">&nbsp&nbsp{{$value->offerprice}}</h2></td>
                      <td  style="color:Green;">{{$value->fromdate}}</td>
                      <td  style="color:Red;">{{$value->todate}}</td>

                      <td><a href="/approveofferinformation/{{$value->pid}}"><h1>&nbsp&nbsp&nbsp&nbsp🎯</h1></a></td>
                      <td align="center">
                      @if($value->ofstatus!==0)
                      <font color="Green"><b><h4>✔</h4></b></font> 
                      @else
                      ❌
                      @endif</td>


                   </tr>                  
                      @endforeach
                </table>


                </div>
               </div>
               
               </div>
               </div>
               
               </div>
               </div>
               
               </div>
               </div>
               
                  </tbody> 
    

</body>
</html>

@endsection























