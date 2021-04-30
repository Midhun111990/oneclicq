
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
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Approved products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
              

                <h3 class="card-title">Approved products  </h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
            
                <table class="table table-bordered">
                  
                  <tbody>
                 
                    <tr>
                    <td>Sr no.</td>
                      <td>Name</td>
                      <td>Description</td>
                      <td>View</td>
                      </tr>
                      <tr>
                     
                     
                      @foreach($result as $value)       
                      <td>{{$loop->iteration}}</td> 
                      <!-- Automatically index
                       -->
                      <td>{{$value->name}}</td>
                      <td>{{$value->description}}</td>
                      <td><a href="/adminsingleproductinformation/{{$value->pid}}">More</td>
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























