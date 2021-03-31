
@extends('vendor.vendordas')
@section('body')

@foreach($result as $value)



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
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">My Products  </h3><a href="/addproduct/{{session('sesid')}}">
                    Add More +</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Name</td>
                      <td>{{$value->name}}</td>
                      </tr>
                      <tr>
                      <td>2.</td>
                      <td>Mobile No.</td>
                      <td>{{$value->mob}}</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>E-mail</td>
                      <td>{{$value->email}}</td>
                    </tr>

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
              <!-- /.card-body -->
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

</html>
@endforeach
@endsection























