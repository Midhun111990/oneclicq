
@extends('vendor.vendordas')
@section('body')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add offer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/V">Home</a></li>
              <li class="breadcrumb-item active">Product offer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @foreach($offerresult as $value )
    
    <form id="agreeproduct_form" novalidate action="/addoffer"  method="post" class="brand" enctype="multipart/form-data"> 
  

  @csrf
                   

    <!-- Main content -->
    <section class="content">
  
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
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
                   
                    </tr>
                   
                    

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
              <div class="card-body p-1">
               <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>GST</td>
                      <td>{{$value->gst}}%</td> 
                      </tr>
                      <tr>
                      <td>2.</td>
                      <td>Price</td>
                      <td><input readonly type="text"id="price" class="form-control"name="price" value="{{$value->price}}"></td>
                      </tr>
                    <tr>
                      <td>3.</td>
                      <td>MRP</td>
                      <td>{{$value->mrp}}</td> 
                      
                      </tr>
                    <tr>
                    <td colspan="3"><input type="submit" name="submit" class="submit btn btn-success" value="Add offer+" style="height:50px;width:408px;font-size: 25px;"> 
</td>
                    </tr>
                  </tbody>
                </table>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

                   

          <div class="col-md-7">
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <img src="{{asset('uploads/images/'.$value->image)}}"height="200px" width="300px" />
            <div class="card">
 
              <div class="card-header">
                
                <h3 class="card-title">Offer..</h3>
               
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
                      <td>Offer price</td>
                      <input type="hidden"id="productid"name="productid"class="form-control" value="{{$value->pid}}">
                      <td><input type="number"readonly id="offprice"class="form-control"name="offprice"value="{{$value->offerprice}}"></td> </tr>
                      <tr>
                      <td>2.</td>
                      <td>Offer percentage</td>
                      <td><input type="number"id="offpercentage" class="form-control"name="offpercentage"value="{{$value->offerpercentage}}"></td>  </tr>
                    <tr>
                      <td>3.</td>
                      <td>Valid from</td>
                      <td><input type="date"id="fromdate" name="fromdate"class="form-control"value="{{$value->fromdate}}"></td></tr>
                    <tr>
                      <td>4.</td>
                      <td>Valid to</td>
                      <td><input type="date"id="todate" name="todate"class="form-control"value="{{$value->todate}}"></td> 
                    </tr>
                  
                  
                    
                    
                  </tbody>
               
                </table>



              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

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












 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</script>
<script>
        $(document).on("change keyup blur", "#offpercentage", function() {
            var main = $('#price').val();
            var disc = $('#offpercentage').val();
            var dec = (disc / 100).toFixed(2); //its convert 10 into 0.10
            var mult = main * dec; // gives the value for subtract from main value
            var discont = main - mult;
            $('#offprice').val(discont);
        });
    </script>

