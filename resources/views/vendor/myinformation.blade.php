
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
            <h1><b>About </b><u>Me</u> & <u>My</u> Company</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Informations</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <form id="agreevendor_form" novalidate action="/approved/{{$value->id}}"  method="post" class="brand" enctype="multipart/form-data"> 
  @csrf

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
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

          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Company</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
               <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Company name</td>
                      <td>{{$value->companyname}}</td>
                      </tr>
                      <tr>
                      <td>2.</td>
                      <td>Office nuber</td>
                      <td>{{$value->officeno}}</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>State</td>
                      <td>{{$value->state}}</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>District</td>
                      <td>{{$value->district}}</td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Location</td>
                      <td>{{$value->location}}</td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Business type</td>
                      <td>{{$value->businesstype}}</td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->




          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Store</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
              <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Store Name</td>
                      <td>{{$value->storename}}</td>
                      </tr>
                      <tr>
                      <td>2.</td>
                      <td>Selling Categories</td>
                      <td>{{$value->sellingcat}}</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Store Logo</td>
                      <td><a href="{{asset('uploads/images/'.$value->storelogo)}}">VIEW</a></td>
                    </tr>
                    
                  </tbody>
                </table>



              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bank</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
              <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Name in bank documents</td>
                      <td>{{$value->storename}}</td>
                      </tr>
                      <tr>
                      <td>2.</td>
                      <td>Account type</td>
                      <td>{{$value->accounttype}}</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Bank account number</td>
                      <td>{{$value->accountno}}</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>IFSC Code</td>
                      <td>{{$value->ifsccode}}</td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Canceled cheque</td>
                     <td><a href="{{asset('uploads/images/'.$value->cancelledcheque)}}">VIEW</a></td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Signature</td>
                      <td><a href="{{asset('uploads/images/'.$value->signature)}}">VIEW</a></td>
                    </tr>
                  </tbody>
                </table>

              </div>
</div>
</div>



</div>
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Business</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
               <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Trade Licence no.</td>
                      <td>{{$value->tradelicenceno}}</td>
                      </tr>
                      <tr>
                      <td>2.</td>
                      <td>Trade Licence Document</td>
                      <td><a href="{{asset('uploads/images/'.$value->tradedocument)}}">VIEW</a></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>GST no.</td>
                      <td>{{$value->gstno}}</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>GST Document</td>
                      <td><a href="{{asset('uploads/images/'.$value->gstdocument)}}">VIEW</a></td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>PAN no.</td>
                      <td>{{$value->panno}}</td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>PAN Document</td>
                      <td><a href="{{asset('uploads/images/'.$value->pandocument)}}">VIEW</a></td>
                    </tr>
                    <tr>
                      <td>7.</td>
                      <td>ID Proof</td>
                      <td>{{$value->iddocument}}</td>
                    </tr>
                    <tr>
                      <td>8.</td>
                      <td>FSSAI LIC.No</td>
                      <td>{{$value->fssaino}}</td>
                    </tr>
                    <tr>
                      <td>9.</td>
                      <td>Shipping Mode</td>
                      <td>{{$value->shipping }}</td>
                    </tr>
                    <tr>
                    <td></td>
                    

</tr>
                  </tbody>
                </table>
               
                </div>
               
                </div>
               
                </div>
               
                </div>




</body>

</html>
</form>
@endforeach
@endsection












