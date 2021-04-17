
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
              
              @foreach($result as $value)
              <form id="updatecategory_form" novalidate action="/updatecatinformation/{{$value->catid}}"       method="post" class="cat" enctype="multipart/form-data"> 
  @csrf
              <table class="table table-bordered">
              <tbody style="color:white;background-color:black;">
                    <tr>
                    <td align="center"><b><h4>ID</h4></b></td>
                    <td align="center"><b><h4>Change image</h4></b></td>
                  
                    <td align="center"><b><h4>Name</h4></b></td>
                    <td align="center"><b><h4>Description</h4></b></td>
                    <td align="center"><b><h4>Commission</h4></b></td>
                    
                      </tr>
       
               
               
                      <tr>
                      <td style=text-align:center>{{$loop->iteration}}</td> 
                      <td align="center"><input type="file" maxlength="80" size="5"name="categoryimage" id="categoryimage"value="{{$value->catimage}}" />  
                      @error("categoryimage")
<p style="color:red">{{$errors->first("categoryimage","Select image based on category !")}}</p>
@enderror</td>
              
                      
                      <td align="center"><input type="text"  maxlength="80" size="20" name="categoryname" id="categoryname"value="{{$value->catname}}"/>      
                      @error("categoryname")
<p style="color:red">{{$errors->first("categoryname","Enter Category name !")}}</p>
@enderror</td>
                      <td align="center"><input type="text"  maxlength="100" size="25" name="categorydes" id="categorydes"value="{{$value->catdes}}"/>    
              
                      @error("categorydes")
<p style="color:red">{{$errors->first("categorydes","Enter Category description !")}}</p>
@enderror</td>         
                      
                      <td align="center"><input type="text"  maxlength="10" size="2" name="categorycommission" id="categorycommission"value="{{$value->catcommission}}"/>
                      @error("categorycommission")
<p style="color:red">{{$errors->first("categorycommission","Enter your commission based on category !")}}</p>
@enderror</td>
                      
                      <!-- <td align="center"><a href="/updatecatinformation/{{$value->catid}}"><h3>(-_-)</h3></a>    </td>
                       -->
     
                      
</tr>
<tr>
    <td colspan="2"> <input type="submit" name="submit" class="submit btn btn-success" value="+" ></td>
                      <td style=text-align:center> 
                         <img src="{{asset('uploads/images/'.$value->catimage)}}"height="250px" width="200px" />
</td>             
<td colspan="3"><a href="/deletecatinformation/{{$value->catid}}"><h3> -</h3></a>   
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












