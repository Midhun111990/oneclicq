
@extends('vendor.vendordas')
@section('body')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product informations</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product informations</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    @foreach($res as $value )

    <form id="agreeproduct_form"   method="get" class="brand" enctype="multipart/form-data"> 
  @csrf
                   

    <!-- Main content -->
    <section class="content">
  
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Basic..</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Name</td>
                      <td>{{$value->name}}</td>
                         </tr>
                      <tr>
                      <td>2.</td>
                      <td>Description</td>
                      <td>{{$value->description}}</td></tr>
                    <tr>  
                      <td>3.</td>
                      <td>Category</td>
                      <td>{{$value->catid}}</td>
                       </td>
                     
                      
                      </select></td>
                    </tr>
                    <tr>  
                      <td>4.</td>
                      <td>Sub Category</td>
                      <td>{{$value->subcatid}}</td>
                     
                      
                      </select></td>
                    </tr>
                   
                    <tr>
                      <td>5.</td>
                      <td>Brand</td>
                     
                      <td>{{$value->brandid}}</td>
                     
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Other brand</td>
                      <td>{{$value->otherbrand}}</td>
                    

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                
              </div>
            
            
            </div>
            <!-- /.card -->

          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Other..</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
               <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>GST</td>
                      <td>{{$value->gst}}</td> 
                      </tr>
                      <tr>
                      <td>2.</td>
                      <td>Price</td>
                      <td>{{$value->price}}</td>
                      </tr>
                    <tr>
                      <td>3.</td>
                      <td>MRP</td>
                      <td>{{$value->mrp}}</td> 
                      </tr>
                    <tr>
                      <td>4.</td>
                      <td>Stock Unit</td>
                      <td>{{$value->stockunit}}</td> </tr>
                    <tr>
                      <td>5.</td>
                      <td>Warranty details</td>
                      <td>{{$value->warrantydetails}}</td></tr>
                   
                  </tbody>
                </table>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

                   

          <div class="col-md-6">
          ............................................
            <img src="{{asset('uploads/images/'.$value->image)}}"height="200px" width="180px" />
            ...........................................
            <div class="card">
 
              <div class="card-header">
                
                <h3 class="card-title">Other..</h3>
               
                <div class="card-tools">
                
                  <ul class="pagination pagination-sm float-right">
                
                    </ul>
                </div>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
              
              <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                    
                      <td>1.</td>
                      <td>Height</td>
                      <td>{{$value->height}}</td> </tr>
                      <tr>
                      <td>2.</td>
                      <td>Weight</td>
                      <td>{{$value->weight}}</td>  </tr>
                    <tr>
                      <td>3.</td>
                      <td>Width</td>
                      <td>{{$value->width}}</td></tr>
                    <tr>
                      <td>4.</td>
                      <td>Length</td> 
                      <td>{{$value->length}}</td> </tr>
                    
                    
                  </tbody>
                </table>



              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Legal..</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
              <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Return policy</td>
                      @if ($value->returnpolicy==1)
                      <td>YES</td>
                      @else
                      <td>NO</td>
                      @endif</tr>
                      <tr>
                      <td>2.</td>
                      <td>Free delivery</td>
                      @if ($value->freedelivery==1)
                      <td>YES</td>
                      @else
                      <td>NO</td>
                      @endif</tr>
                    <tr>
                      <td>3.</td>
                      <td>Returnable</td>
                      @if ($value->returnable==1)
                      <td>YES</td>
                      @else
                      <td>NO</td>
                      @endif</tr>

                    <!-- <td><input type="submit" name="submit" class="submit btn btn-success" value="Approve" ></td> -->

                   
                  </tbody>
                </table>
</div>
</div>
</div>
              </div>
</div>
</div>


                  </tbody>
                </table>
               


                @endforeach

                </form>

@endsection















