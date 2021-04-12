
@extends('admin.admindas')
@section('body')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Brand</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    


            <div class="card">
              <div class="card-header">
              <div class="card-body p-0">
             
                <h3 class="card-title">Add Brand +</h3>
              </div>
              <!-- /.card-header -->
              <form id="addcategory_form" novalidate action="/addbrand"  method="post" class="brand" enctype="multipart/form-data"> 
  @csrf
 
              <table class="table table-bordered">
                  
                  
                  <tbody>
                    <tr>
                    <td>Brand Name</td>
                    <td>Logo</td>
                    <td>Add</td>
                    </tr>
                    <tr>
                    <td><input type="text" name="brandname" id="brandname" placeholder="Enter name of Brand">
                    @error("brandname")
<p style="color:red">{{$errors->first("brandname","Enter brand name !")}}</p>
@enderror
</td>
                      <td><input type="file" name="brandimage" id="brandimage" placeholder="Select brand logo">
                      @error("brandimage")
<p style="color:red">{{$errors->first("brandimage","Select brand Logo !")}}</p>
@enderror
</td>
                     <td> <input type="submit" name="submit" class="submit btn btn-success" value="+" >   </td>
                    </tr>
                   


                  </tbody>
                </table>
</form>
<section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Brands</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  
                <tbody style="color:white;background-color:black;">
                 <tr>
                    <td align="center"><b><h4>ID</h4></b></td>
                      <td align="center"><b><h4>Brand Name</h4></b></td>
                      </tr>
                      @foreach($result as $value)
               
                      <tr>
                      <td align="center">{{$value->brandid}}</td>
                      <td align="center">{{$value->brandname}}</td>
                      
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












