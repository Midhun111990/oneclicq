

@extends('admin.admindas')
@section('body')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>REJECT Application</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Application Reject</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    


            <div class="card">
              <div class="card-header">
              <div class="card-body p-12">
             
                <h3 class="card-title">Add reason for rejecting the application +</h3>
              </div>
              <!-- /.card-header -->
              
            
              @foreach($result as $value)
              <form id="applicationreject_form" novalidate action="/rejectapp/{{$value->id}}"   method="post" class="cat" enctype="multipart/form-data"> 
  @csrf
              <table class="table table-bordered">
                  
                  
                  <tbody>
                    <tr>
                    </tr>
                    <tr>
<td><center>
<input type="text" style="font-size: 8ptpt; height: 100px; width:700px;" id="reason" name="reason"value="{{$value->reason}}"  rows="5" cols="80">
</center> </td>
                     <td> <input type="submit" name="submit" class="submit btn btn-success" value="+" style="height:145px;width:300px;font-size: 100px;">   </td>
                    </tr>
                   


                  </tbody>
                </table>



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

@endforeach     

@endsection








