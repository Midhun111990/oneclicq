
@extends('vendor.vendordas')
@section('body')




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/V">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              

                <h3 class="card-title">Comments &nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                
               
                 
</h1>
                </div><center><h1>Public reviews📝</h1></center>
              <!-- /.card-header -->
              <div>
        <div >
            
                  </tbody>
                </table>
              </div>



       

              <div class="card-body">
                <table class="table table-bordered">
                  
                  <tbody>
                 
                    <tr style="color:white;background-color:black;">
                    <td>Image</td>
                      <td>Name</td>
                      <td>Comments</td>
                      <td>Star</td>
                      <td>View</td>
                </tr>
                      <tr>
                     
                     
                      @foreach($res as $value)   
            
                      <td><a href="{{asset('uploads/images/'.$value->image3)}}"><img src="{{asset('uploads/images/'.$value->image3)}}"height="40px" width="60px" /></a>
                     </td>    
                      
                     <td>{{$value->name}}</td>
                     <td>
                     
                     <select  style="width: 500px;
        margin: 10px;" multiple="multiple" name="pcomment" id="pcomment">

        <option >✏️{{$value->comment}}"</option>
   
</select></td>
                     @if($value->rating==1)
                    <td>⭐️ </td>
                    @elseif($value->rating==2)
                    <td>⭐️ ⭐️</td>
                    @elseif($value->rating==3)
                    <td>⭐️⭐️⭐️ </td>
                    @elseif($value->rating==4)
                    <td>⭐️⭐️⭐️⭐️ </td>
                    @else 
                    <td>⭐️⭐️⭐️⭐️⭐️ </td> 
                    @endif
                    <td><a href="/vendorsingleproductinformation/{{$value->pid}}"> View 👀</a></td>
               
                    </tr>
                    </html>
                    @endforeach                   

                  </tbody>
                </table>
              </div>

              <!-- /.card-body -->
              <div class="card-footer clearfix">
                
              </div>
            
            
            </div>
            <!-- /.card -->

              <!-- /.card-header -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->






              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        <!-- /.card-header -->
                  </tbody>
                </table>

              </div>
</div>
</div>

                  </tbody>
                </table>




</form>
</body>


@endsection























