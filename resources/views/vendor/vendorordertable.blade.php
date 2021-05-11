
@extends('vendor.vendordas')
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
              

                <h3 class="card-title">Orders  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                          
                      <h1><a href="/offeredproduct">Orders</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  
                  <tbody>
                 
                    <tr style="color:white;background-color:black;">
                    <td>Sr.no</td>
                    <td>Image</td>
                      <td>Name</td>
                       <td>Price</td>
                       
                       <td>Quantity</td>
                       
                       <td>Action</td>
                      <td>View Customer</td>
                   </tr>
                      <tr>
                     
                      @foreach($res as $val)    
                      <td align="center">{{$loop->iteration}}</td>     
                      
                      <td>
                      <a href="{{asset('uploads/images/'.$val->image)}}"> <img src="{{asset('uploads/images/'.$val->image)}}"height="150px" width="130px" /></a>
          <a href="{{asset('uploads/images/'.$val->image1)}}">  <img src="{{asset('uploads/images/'.$val->image1)}}"height="60px" width="40px" /></a>
          <a href="{{asset('uploads/images/'.$val->image2)}}"> <img src="{{asset('uploads/images/'.$val->image2)}}"height="60px" width="40px" /></a>
          <a href="{{asset('uploads/images/'.$val->image3)}}"> <img src="{{asset('uploads/images/'.$val->image3)}}"height="60px" width="40px" /></a>
                  </td>    
                      <td>{{$val->description}}</td>
                      <td><h2 style="background-color:Chartreuse;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$val->price}}</h2></td>
                      <td align="center">{{$loop->iteration}}</td>     

                      <td><input type="button" id="approve" class="form-control"name="approve" value="Approve"></td>

                      <td><a href="/vendorsinglecustomerinformation/{{$val->userid}}"><h1>View</h1></a></td>

                   </tr>                  
                      @endforeach
                </table>
                </div></div></div></div></div></div></div>

</body>
</html>

@endsection























