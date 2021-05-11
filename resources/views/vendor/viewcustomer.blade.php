
@extends('vendor.vendordas')
@section('body')
@foreach($cusresult as $val)



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><b>About </b><u>Customer</u></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/V">Home</a></li>
              <li class="breadcrumb-item active">Customer details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   <div>
   
    </div><!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Vendor</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Name</td>
                      <td>{{$val->fname}}</td> </tr>
                      <tr>
                      <td>2.</td>
                      <td>Last name</td>
                      <td>{{$val->lname}}</td>
                        </tr>
                    <tr>
                      <td>3.</td>
                      <td>E-mail</td>
                      <td>{{$val->email}}</td>
       </tr>
      <tr>
                      <td>4.</td>
                      <td>Mobile no</td>
                      
      <td>{{$val->mobile}}</td>
      
      <tr>
                      <td>5.</td>
                      <td>Gender</td>
      <td>{{$val->gender}}</td>
      <tr>
                      <td>6.</td>
                      <td>Date of Birth</td>
                      <td>{{$val->dob}}</td>
       </tr>
      <tr>
                      <td>7.</td>
                      <td>Address</td>
                      <td><textarea readonly rows="3"class="form-control" cols="80" style=color:red>{{$val->address}}</textarea>
  </td>
<td></td>                     </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                
              </div>
            
            
            </div>
            <!-- /.card -->

          
            

            <!-- /.card -->
          </div>
          <!-- /.col -->




         
              <!-- /.card-header -->
              <div class="card-body p-0">
                </table>



              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          

</div>



</body>

</html>
</form>
@endforeach
@endsection












