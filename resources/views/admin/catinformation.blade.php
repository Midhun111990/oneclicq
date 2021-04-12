
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
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    


            <div class="card">
              <div class="card-header">
              <div class="card-body p-12">
             
                <h3 class="card-title">Add Category +</h3>
              </div>
              <!-- /.card-header -->
              <form id="addcategory_form" novalidate action="/addcat"  method="post" class="cat" enctype="multipart/form-data"> 
  @csrf
 
              <table class="table table-bordered">
                  
                  
                  <tbody>
                    <tr>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Image</td>
                    <td>Commission</td>
                    
                    </tr>
                    <tr>
                    <td><input type="text" name="catname" id="catname" placeholder="Enter name of category">
                    @error("catname")
<p style="color:red">{{$errors->first("catname","Enter Category name !")}}</p>
@enderror</td>
                      <td><input type="text" name="catdes" id="catdes" placeholder="Enter description of category">
                      @error("catdes")
<p style="color:red">{{$errors->first("catdes","Enter Category description !")}}</p>
@enderror</td>
                      <td><input type="file" name="catimage" id="catimage" placeholder="Select Image">
                      @error("catimage")
<p style="color:red">{{$errors->first("catimage","Select image based on category !")}}</p>
@enderror</td>
                      <td><input type="text" name="catcommission" id="catcommission" placeholder="Commision based on category">                      @error("catcommission")
<p style="color:red">{{$errors->first("catcommission","Enter your commission based on category !")}}</p>
@enderror</td>
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
                <h3 class="card-title">Category</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  
                  <tbody style="color:white;background-color:black;">
                    <tr>
                    <td align="center"><b><h4>ID</h4></b></td>
                    <td align="center"><b><h4>Name</h4></b></td>
                    <td align="center"><b><h4>Commission</h4></b></td>
                    <td align="center"><b><h4>Add</h4></b></td>
                     
     
                      </tr>
                      @foreach($result as $value)
               
                      <tr>
                      <td align="center">{{$loop->iteration}}</td> 
                      <td align="center">{{$value->catname}}</td>
                      <td align="center">{{$value->catcommission}}</td>
                 
                 
     
                      <td align="center"><a href="/subcatinformation/{{$value->catid}}"><h3> +</h3></a>    </td>
               
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












