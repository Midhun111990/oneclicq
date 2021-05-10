
@extends('vendor.vendordas')
@section('body')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          @foreach($catres as $val)
            <h1>Product informations</h1>
            <textarea readonly rows="3" cols="122" style=color:red>{{$val->reason}}</textarea>
  
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/V">Home</a></li>
              <li class="breadcrumb-item active">Product informations</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    

    <form id="agreeproduct_form" novalidate action="/updateproduct/{{$val->pid}}"  method="post"  class="brand" enctype="multipart/form-data"> 
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
                      <td><input type="text" name="pname" id="pname"class="form-control" value="{{$val->name}}" required/>
                         </tr>
                      <tr>
                      <td>2.</td>
                      <td>Description</td>
                      <td><input type="text" style="height: 100px; width:280px; " name="pdes" id="pdes" class="form-control" value="{{$val->description}}"></td></tr>
                    <tr>  
                      <td>3.</td>
                      <td>Category</td>
                      <td><select name="pcat" id="pcat" class="form-control" required>
                      <option> {{$val->catid}}</option>
                       @foreach($resu as $vallt) 
                     <option value="{{$vallt->catid}}">{{$vallt->catname}}</option>
                      @endforeach</select></td>
                       </td>
                     
                      
                      </select></td>
                    </tr>
                    <tr>  
                      <td>4.</td>
                      <td>Sub Category</td>
                      <td><select name="ptype" id="ptype" class="form-control">
                      <option value="{{$val->subcatid}}">{{$val->subcatname}}</option>
                     </select></td>
                     <script>
     
     $(document).ready(function(){
    $("#pcat").on('change', function()
    {
      var catid=$("#pcat").val();
         // alert('hi');
    
    $.ajax({
        type:"get",
        url:"/prdSubCat/"+catid,
        success:function(result)
        
        {
          
          $('#ptype').html(result);

        }
      });
      // $("#sub").show();
  });
     });
    </script>      
 
                      
                      </select></td>
                    </tr>
                   
                    <tr>
                      <td>5.</td>
                      <td>Brand</td>
                      <td>
                      <select name="pbrand" id="pbrand" class="form-control">
                      <option> {{$val->brandid}}</option>
                      <option> Choose</option>
                      @foreach($brandres as $valuew) <option value="{{$valuew->brandid}}">{{$valuew->brandname}}</option>
                      @endforeach</select>  </td>
                     
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Other brand</td>
                      <td><input type="text" name="obrand" id="obrand"class="form-control"placeholder="Optional" value="{{$val->otherbrand}}"></td>
                    

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
                      <td><input type="text" name="pgst"placeholder="in %" id="pgst"class="form-control"value="{{$val->gst}}"></td> 
                      </tr>
                      <tr>
                      <td>2.</td>
                      <td>Price</td>
                      <td><input type="text" name="pprice" placeholder="in ₹"id="pprice"class="form-control"value="{{$val->price}}"></td>
                      </tr>
                    <tr>
                      <td>3.</td>
                      <td>MRP</td>
                      <td><input type="text" name="pmrp"  placeholder="in ₹"id="pmrp"class="form-control"value="{{$val->mrp}}"></td> 
                      </tr>
                    <tr>
                      <td>4.</td>
                      <td>Stock Unit</td>
                      <td><input type="text" name="pstock" id="pstock"class="form-control"value="{{$val->stockunit}}"></td> </tr>
                    <tr>
                      <td>5.</td>
                      <td>Warranty details</td>
                      <td><input type="text" name="pwar" id="pwar"class="form-control"value="{{$val->warrantydetails}}"></td></tr>
                      <td colspan="3"><input type="submit" name="submit" class="submit btn btn-success" value="Modify"style="height: 191px;width: 485px; font-size:290%;"  >

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->




          <div class="col-md-6">
                 
         <a href="/deleteproduct/{{$val->pid}}"><h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          &nbsp&nbsp&nbsp&nbsp&nbsp 🔥DELETE</h1></a>
              <input type="file" style="width: 30%;background-color: lightblue;padding: px 20px;box-sizing: border-box;font-size:80%;"name="pimage" id="pimage"class="form-control"value="{{$val->image}}"><a href="{{asset('uploads/images/'.$val->image)}}"><img src="{{asset('uploads/images/'.$val->image)}}"height="60px" width="80px" /></a>
              <input type="file" style="width: 30%;background-color: lightgreen;padding: px 20px;box-sizing: border-box;font-size:80%;"name="pimage1" id="pimage1"class="form-control"value="{{$val->image1}}"><a href="{{asset('uploads/images/'.$val->image1)}}"><img src="{{asset('uploads/images/'.$val->image1)}}"height="60px" width="80px" /></a>
              <input type="file" style="width: 30%;background-color: lightgrey;padding: px 20px;box-sizing: border-box;font-size:80%;"name="pimage2" id="pimage2"class="form-control"value="{{$val->image2}}"><a href="{{asset('uploads/images/'.$val->image2)}}"><img src="{{asset('uploads/images/'.$val->image2)}}"height="60px" width="80px" /></a>
              <input type="file" style="width: 30%;background-color: lightpink;padding: px 20px;box-sizing: border-box;font-size:80%;"name="pimage3" id="pimage3"class="form-control"value="{{$val->image3}}">   <a href="{{asset('uploads/images/'.$val->image3)}}"><img src="{{asset('uploads/images/'.$val->image3)}}"height="60px" width="80px" /></a>
            
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
                      <td><input type="text" name="pheight" placeholder="in CM" id="pheight"class="form-control"value="{{$val->height}}"></td> </tr>
                      <tr>
                      <td>2.</td>
                      <td>Weight</td>
                      <td><input type="text" name="pweight"  placeholder="in Pounds"id="pweight"class="form-control"value="{{$val->weight}}"></td>  </tr>
                    <tr>
                      <td>3.</td>
                      <td>Width</td>
                      <td><input type="text" name="pwidth"  placeholder="in CM"id="pwidth"class="form-control"value="{{$val->width}}"></td></tr>
                    <tr>
                      <td>4.</td>
                      <td>Length</td> 
                      <td><input type="text" name="plen" id="plen" placeholder="in CM"class="form-control"value="{{$val->length}}"></td> </tr>
                   
                    
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
              <div class="card-body ">
              <table class="table table-bordered">
                  
                  <tbody>
                  <tr>
                      <td >1.</td>
                      <td>Return policy</td>
                      
                      @if ($val->returnpolicy==1)
                      <td><b>YES</b></td>
                      @else
                      <td><b>NO</b></td>
                      @endif
                      </tr>
                      <td colspan="3">&nbsp&nbsp&nbsp
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      <input type="checkbox" name="pret" id="pret" value="1"> YES &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      <input type="checkbox" name="pret" id="pret" value="0"> NO </td>
                      
                     
                      <tr>
                      <td>2.</td>
                      <td>Free delivery</td>
                      @if ($val->freedelivery==1)
                      <td><b>YES</b></td>
                      @else
                      <td><b>NO</b></td>
                      @endif
                      </tr><td colspan="3">&nbsp&nbsp&nbsp
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      <input type="checkbox" name="pdelyes" id="pdelyes" value="1"> YES &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      <input type="checkbox" name="pdelyes" id="pdelyes" value="0"> NO </td>
                    

                    
                    <tr>
                      <td>3.</td>
                      <td>Returnable</td>
                      @if ($val->returnable==1)
                      <td><b>YES</b></td>
                      @else
                      <td><b>NO</b></td>
                      @endif
                      </tr>
                      <td colspan="3">&nbsp&nbsp&nbsp
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      <input type="checkbox" name="preturn" id="preturn" value="1"> YES &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      &nbsp&nbsp&nbsp&nbsp 
                      <input type="checkbox" name="preturn" id="preturn" value="0"> NO </td>
                    
                    <tr>
                       <!-- <input type="submit" name="submit" class="submit btn btn-success" value="Reject" ></td> -->
</tr>
                   
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
               




                </form>
                @endforeach
@endsection















