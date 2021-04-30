
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
              

                <h3 class="card-title">Add Offer +  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                          
                      <h1><a href="/offeredproduct">Offered products</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  
                  <tbody>
                 
                    <tr style="color:white;background-color:black;">
                    <td>Image</td>
                      <td>Name</td>
                       <td>Price</td>
                      <td>Add Offer</td>
                   </tr>
                      <tr>
                     
                      @foreach($res as $val)    
                      
                      <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      <img src="{{asset('uploads/images/'.$val->image2)}}"height="120px" width="180px" />
                      <img src="{{asset('uploads/images/'.$val->image1)}}"height="120px" width="180px" />
                   </td>    
                      <td>{{$val->name}}</td>
                      <td>{{$val->price}}</td>
                      <td><a href="/vendorsingleofferinformation/{{$val->pid}}"><h1>🎉</h1></a></td>

                   </tr>                  
                      @endforeach
                </table>


                @foreach($offerresult as $value)
                      <table>
                      <tr>
                      <td>FROM date</td>
                      <td>Name</td>
                      
                      <td>End date</td>
                      </tr>
                      <tr>
                      <td>{{$value->fromdate}}</td>
                      <td>{{$value->name}}</td>

<td>{{$value->todate}}</td>
<td></td></tr>
                                            
                   
                      </tr>  
                     
                   
                  </tbody> @endforeach
    

</body>
</html>

@endsection























