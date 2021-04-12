
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
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
              

                <h3 class="card-title">Products  </h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
             <center> 
             <h3> <a href="/pendingproduct"style="color:red">Pending</a>
              <a href="/approvedproduct"style="color:green">/ Approved</a>
                </h3></center>
                <table class="table table-bordered">
                  
                <tbody style="color:white;background-color:black;">
                 
                    <tr>
                    <td align="center"><b><h4>Sr no.</h4></b></td>
                    <td align="center"><b><h4>Image</h4></b></td>
                    <td align="center"><b><h4>Name</h4></b></td>
                    <td align="center"><b><h4>Description</h4></b></td>
                    <td align="center"><b><h4>Price</h4></b></td>
                    <td align="center"><b><h4>Status</h4></b></td>
                    <td align="center"><b><h4>View</h4></b></td>
                    
                    
                      </tr>
                      <tr>
                     
                     
                      @foreach($result as $value)       
                      <td align="center">{{$loop->iteration}}</td> 
                      <td align="center"><img src="{{asset('uploads/images/'.$value->image)}}"height="100px" width="100px" /></td>
           
                      <td align="center">{{$value->name}}</td>
                      <td align="center">{{$value->description}}</td>
                      <td align="center">{{$value->price}}</td>
                      <td align="center">
                      @if($value->status==1)
                      <font color="Green"><b><h4>✔</h4></b></font> 
                      @else
                      ❌
                      @endif</td>
                      <td align="center"><a href="/singleproductinformation/{{$value->pid}}">More</td>
                    </tr>
                    </html>
                    @endforeach                   

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                
              </div>
            
            
            </div>
            <!-- /.card -->

              <!-- /.card-header -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->






              </div>
            </div>
            <!-- /.card -->


        <!-- /.card-header -->
                  </tbody>
                </table>

              </div>
</div>

</div>

                  </tbody>
                </table>






</body>


@endsection























