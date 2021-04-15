
@extends('admin.admindas')
@section('body')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sub Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Sub Categories</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    


            <div class="card">
              <div class="card-header">
              <div class="card-body p-12">
             
                <h3 class="card-title">Add Sub Category +</h3>
              </div>
              <!-- /.card-header -->
              
              @foreach($result as $value)
              <form id="updatesubcategory_form" novalidate action="/updatesubcatinformation/{{$value->subcatid}}"       method="post" class="cat" enctype="multipart/form-data"> 
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
                      <td align="center"><input type="file" maxlength="80" size="5"name="subcategoryimage" id="subcategoryimage"value="{{$value->subcatimage}}" />  
                      @error("subcategoryimage")
<p style="color:red">{{$errors->first("subcategoryimage","Select image based on sub category !")}}</p>
@enderror</td>
              
                      
                      <td align="center"><input type="text"  maxlength="20" size="20" name="subcategoryname" id="subcategoryname"value="{{$value->subcatname}}"/>      
                      @error("subcategoryname")
<p style="color:red">{{$errors->first("subcategoryname","Enter Sub category name !")}}</p>
@enderror</td>
                      
                      <!-- <td align="center"><a href="/updatecatinformation/{{$value->catid}}"><h3>(-_-)</h3></a>    </td>
                       -->
     
                      
</tr>
<tr>
                      <td style=text-align:center> 
                         <img src="{{asset('uploads/images/'.$value->subcatimage)}}"height="250px" width="200px" />
</td>             
<td colspan="2"><input type="submit" name="submit" class="submit btn btn-success" style="height:200px;width:800px;font-size : 100px"value="+" >
<a href="/deletesubcatinformation/{{$value->subcatid}}"><h2><b> <center>REMOVE</center></b></h2></a>
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












