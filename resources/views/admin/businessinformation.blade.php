
@extends('admin.admindas')
@section('body')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Business Types</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Business type</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    


            <div class="card">
              <div class="card-header">
              <div class="card-body p-0">
             
                <h3 class="card-title">Add Business type +</h3>
              </div>
              <!-- /.card-header -->
              <form id="addbusiness_form" novalidate action="/addbusiness"  method="post" class="brand" enctype="multipart/form-data"> 
  @csrf
 
              <table class="table table-bordered">
                  
                  
                  <tbody>
                    <tr>
                    <td>Name</td>
                    
                    </tr>
                    <tr>
                    <td><input type="text" name="businessname" id="businessname" placeholder="Business type"></td>
                    <input type="hidden" name="status" id="status"value="0">
                     
                     <td> <input type="submit" name="submit" class="submit btn btn-success" value="+" >   </td>
                    </tr>
                   


                  </tbody>
                </table>
</form>
<section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Business Types</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                    <td>ID</td>
                      <td>Name</td>
                      </tr>
                      @foreach($result as $value)
               
                      <tr>
                      <td>{{$value->id}}</td>
                      <td>{{$value->name}}</td>
                      
                    </tr>
                     
@endforeach    
                  </tbody>
                </table>
              </div>
     
     </div>
     </div>
</div>

</div>
</div>
             
             
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                
              </div>
            
            
            </div>
            <!-- /.card -->

         <!-- /.col -->




   
</div>


</body>

</html>

@endsection












