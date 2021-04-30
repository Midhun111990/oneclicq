
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
              

                <h3 class="card-title">My Products &nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                
                 </h3><a href="/viewproduct/{{session('sesid')}}"style="color:blue">
               
                 <b><h3>Add More +</h3></b></a>
                 <h1><a href="/pendingproduct/{{session('sesid')}}"style="color:red">Pending</a>
              <a href="/approvedproduct/{{session('sesid')}}"style="color:green">/ Approved</a>
                 
</h1>
                </div>
              <!-- /.card-header -->
              <div>
        <div >
            <div>
            <form action="/searchproduct" method="GET" role="search">
            @csrf
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp        
             <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                          
                          <button class="btn btn-info" type="submit" title="Search projects" style="width: 200px;height: 50px;">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
<div>
                        <input type="text" class="form-control" name="term" placeholder="Search projects" id="term">
     </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <a href="" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page"style="width: 200px;height: 50px;">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($posts as $post)
                 
    @if($posts->isNotEmpty())
    
    <div class="card-body">
                <table class="table table-bordered">
                  
                  <tbody>
                     
                      <td><a href="/deleteproduct/{{$post->pid}}"><h2> 🔥</h2></a> </td>

                      <td><a href="{{asset('uploads/images/'.$post->image)}}"><img src="{{asset('uploads/images/'.$post->image)}}"height="40px" width="60px" /></a>
                      <a href="{{asset('uploads/images/'.$post->image1)}}"><img src="{{asset('uploads/images/'.$post->image1)}}"height="40px" width="60px" /></a>
                      <a href="{{asset('uploads/images/'.$post->image2)}}"><img src="{{asset('uploads/images/'.$post->image2)}}"height="40px" width="60px" /></a>
                      <a href="{{asset('uploads/images/'.$post->image3)}}"><img src="{{asset('uploads/images/'.$post->image3)}}"height="40px" width="60px" /></a>
                     </td>    
                      
                      <td>{{ $post->name }}</td>
                      <td>{{$post ->description}}</td>
                      <td>{{$post ->price}}</td>
                      <td>
                      @if($post->status==1)
                      <font color="Green"><b><h4>✔</h4></b></font> 
                      @else
                      ❌
                      @endif</td>
                      <td>{{$post->stockunit}}</td>       
                      <td><a href="/vendorsingleproductinformation/{{$post->pid}}"> 🛠 View More.....</a></td>
               
                     
                    </tr>
                    </html>
                    @else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif
@endforeach 

                  </tbody>
                </table>
              </div>



       

              <div class="card-body">
                <table class="table table-bordered">
                  
                  <tbody>
                 
                    <tr style="color:white;background-color:black;">
                    <td>DELETE</td>
                    <td>Image</td>
                      <td>Name</td>
                      <td>Description</td>
                      <td>Price</td>
                      <td>Status</td>
                      <td>Stock</td>
                      <td>Make change</td>
                </tr>
                      <tr>
                     
                     
                      @foreach($res as $value)   
                      <td><a href="/deleteproduct/{{$value->pid}}"><h2> 🔥</h2></a> </td>

                      <td><a href="{{asset('uploads/images/'.$value->image)}}"><img src="{{asset('uploads/images/'.$value->image)}}"height="40px" width="60px" /></a>
                      <a href="{{asset('uploads/images/'.$value->image1)}}"><img src="{{asset('uploads/images/'.$value->image1)}}"height="40px" width="60px" /></a>
                      <a href="{{asset('uploads/images/'.$value->image2)}}"><img src="{{asset('uploads/images/'.$value->image2)}}"height="40px" width="60px" /></a>
                      <a href="{{asset('uploads/images/'.$value->image3)}}"><img src="{{asset('uploads/images/'.$value->image3)}}"height="40px" width="60px" /></a>
                     </td>    
                      
                      <td>{{$value->name}}</td>
                      <td>{{$value->description}}</td>
                      <td>{{$value->price}}</td>
                      <td>
                      @if($value->status==1)
                      <font color="Green"><b><h4>✔</h4></b></font> 
                      @else
                      ❌
                      @endif</td>
                      <td>{{$value->stockunit}}</td>       
                      <td><a href="/vendorsingleproductinformation/{{$value->pid}}"> 🛠 View More.....</a></td>
               
                     
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























