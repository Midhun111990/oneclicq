
@extends('admin.admindas')
@section('body')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sub Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sub Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    


            <div class="card">
              <div class="card-header">
              <div class="card-body p-0">
             
                <h3 class="card-title">Add Sub Category +</h3>
              </div>
              
  @foreach($result as $value)
  
              <!-- /.card-header -->
              <form id="addsubcategory_form" novalidate action="/addsubcat/{{$value->catid}}"  method="post" class="cat" enctype="multipart/form-data"> 
  @csrf
 
              <table class="table table-bordered">
                  
                  
                  <tbody>
                    <td>Category</td>
                    <td>Name of subcategory</td>
                    <td>Image</td>
                     
                    </tr>
                    <tr>
                <td>
                       
  {{$value->catname}}

  @endforeach
</select>
                </td>
                    
                    <td><input type="text" name="subcatname" id="subcatname" placeholder="Enter name of subcategory">
                    @error("subcatname")
<p style="color:red">{{$errors->first("subcatname","Enter Sub category name !")}}</p>
@enderror</td>
                     <td><input type="file" name="subcatimage" id="subcatimage" placeholder="Select Image">
                     @error("subcatimage")
<p style="color:red">{{$errors->first("subcatimage","Select image !")}}</p>
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
                    <td align="center"><b><h4>Sub Category</h4></b></td>
                      
                      </tr>
                      @foreach($res as $values)
               
                      <tr>
                      <td align="center">{{$loop->iteration}}</td> 
                      
                      <td align="center">{{$values->subcatname}}</td>
                      
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












