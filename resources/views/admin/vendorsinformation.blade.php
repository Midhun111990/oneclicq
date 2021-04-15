@extends('admin.admindas')
@section('body')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vendors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Vendors info</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>




    <div class="card">
              <div class="card-header">
              <div class="card-body p-0">
             
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
 
              <table class="table table-bordered">
                  
              <tbody>
<tr style="color:white;background-color:black;">
<td align="center"><b><h4>Sr.no</h4></b></td>
<td align="center"><b><h4>Name</h4></b></td>
    <td align="center"><b><h4>Mobile no</h4></b></td>
    <td align="center"><b><h4>E-mail</h4></b></td>
    <td align="center"><b><h4>Status</h4></b></td>
    <td align="center"><b><h4>Permitted</h4></b></td>
     <td align="center"><b><h4>View More....</h4></b></td>
</tr>

@foreach($result as $value)
<tr>
<td>{{$loop->iteration}}</td> 
<td>
{{$value->name}}
</td>
<td>
{{$value->mob}}
</td>
<td>
{{$value->email}}
</td>
@if($value->regstatus==0)
<td>
<font color="Red"><b>PENDING</b></font>
</td>
@else
<td>
<font color="Green"><b>COMPLETED</b></font>
</td>
@endif
</td>
@if($value->adminstatus==2)
 <td>
 <font color="Green"><b>Done</b></font>
 </td>
 @else
 <td>
 <font color="Red"><b>Remaining</b></font>
 </td>                  
@endif
<td><a href="/viewvendordetail/{{$value->id}}">See More...</a></td>

<!-- <td><a href = 'delete/{{ $value->id }}'>Delete</a></td> -->

</tr>
</tbody>
@endforeach
</table>


</div>

</div>
</div>
</div>
</div>

@endsection