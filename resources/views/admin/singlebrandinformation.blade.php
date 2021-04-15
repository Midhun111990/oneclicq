
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
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Brand</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    


            <div class="card">
              <div class="card-header">
              <div class="card-body p-12">
             
                <h3 class="card-title">Add Brand +</h3>
              </div>
              <!-- /.card-header -->
              
              @foreach($result as $value)
              <form id="updatecategory_form" novalidate action="/updatebrandinformation/{{$value->brandid}}"       method="post" class="cat" enctype="multipart/form-data"> 
  @csrf
              <table class="table table-bordered">
              <tbody style="color:white;background-color:black;">
                    <tr>
                    <td align="center"><b><h4>ID</h4></b></td>
                    <td align="center"><b><h4>Change image</h4></b></td>
                  
                    <td align="center"><b><h4>Name</h4></b></td>
                      </tr>
       
               
               
                      <tr>
                      <td style=text-align:center>{{$loop->iteration}}</td> 
                      <td align="center"><input type="file" maxlength="80" size="5"name="brandimage" id="brandimage"value="{{$value->brandlogo}}" />  
                      @error("brandimage")
<p style="color:red">{{$errors->first("brandimage","Select image based on category !")}}</p>
@enderror</td>
              
                      
                      <td align="center"><input type="text"  maxlength="20" size="20" name="brandname" id="brandname"value="{{$value->brandname}}"/>      
                      @error("brandname")
<p style="color:red">{{$errors->first("brandname","Enter Category name !")}}</p>
@enderror</td>
</tr>
<tr>
    <td colspan="2"> <input type="submit" name="submit" class="submit btn btn-success" style="height:200px;width:700px;font-size : 100px"value="+" ><a href="/deletebrandinformation/{{$value->brandid}}"><h1 align="center"><b>Remove</b> </h1></a>   
</td>
                      <td style=text-align:center colspan="1"> 
                         <img src="{{asset('uploads/images/'.$value->brandlogo)}}"height="250px" width="270px" />
</td>             
                    </tr>
               
                    
               
                  </tbody>
                
               
@endforeach     

              

                </table>


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

</form>


</body>

</html>

@endsection












