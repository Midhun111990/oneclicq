
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
    @foreach($result as $value)

    <form id="agreeproduct_form" novalidate action="/addproduct/{{$value->id}}"  method="post" class="brand" enctype="multipart/form-data"> 
  @csrf
  @endforeach

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
                      <td><input type="text" name="pname" id="pname"class="form-control" value="{{old('pname')}}" required/>
                      @error("pname")
<p style="color:red">{{$errors->first("pname")}}</p>
@enderror

                      </td>
                      </tr>
                      <tr>
                      <td>2.</td>
                      <td>Description</td>
                      <td><textarea name="pdes" id="pdes" class="form-control"></textarea>
                      @error("pdes")
<p style="color:red">{{$errors->first("pdes")}}</p>
@enderror
                      </td>
                     
                    </tr>
                    <tr>  
                      <td>3.</td>
                      <td>Category</td>
                      <td><select name="pcat" id="pcat" class="form-control" required>
                      <option> Choose</option>
                      @foreach($resu as $vallt) 
                     <option value="{{$vallt->catid}}">{{$vallt->catname}}</option>
                      @endforeach</select>
                      @error("pcat")
<p style="color:red">{{$errors->first("pcat")}}</p>
@enderror</td>
     
                      
                      </select></td>
                    </tr>
                    <tr>  
                      <td>4.</td>
                      <td>Sub Category</td>
                      <td><select name="ptype" id="ptype" class="form-control">
                      <option> Choose</option>
                     </select>
                      @error("ptype")
<p style="color:red">{{$errors->first("ptype")}}</p>
@enderror</td>

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
                     
               </tr>




                    <tr>
                      <td>5.</td>
                      <td>Brand</td>
                     
                      <td><select name="pbrand" id="pbrand" class="form-control">
                      <option> Choose</option>
                      @foreach($res as $val) <option value="{{$val->brandid}}">{{$val->brandname}}</option>
                      @endforeach</select>
                      @error("ptype")
<p style="color:red">{{$errors->first("ptype")}}</p>
@enderror
</td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Other brand</td>
                      <td><input type="text" name="obrand" id="obrand"class="form-control"placeholder="Optional"></td>
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
              <div class="card-body p-0">
               <table class="table table-bordered">
                  
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>GST</td>
                      <td><input type="text" name="pgst"placeholder="in %" id="pgst"class="form-control"value="{{old('pgst')}}">
                      @error("pgst")
<p style="color:red">{{$errors->first("pgst")}}</p>
@enderror</td>
                      </tr>
                      <tr>
                      <td>2.</td>
                      <td>Price</td>
                      <td><input type="text" name="pprice" placeholder="in ₹"id="pprice"class="form-control"value="{{old('pprice')}}">
                      @error("pprice")
<p style="color:red">{{$errors->first("pprice")}}</p>
@enderror</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>MRP</td>
                      <td><input type="text" name="pmrp"  placeholder="in ₹"id="pmrp"class="form-control"value="{{old('pmrp')}}">
                      @error("pmrp")
<p style="color:red">{{$errors->first("pmrp")}}</p>
@enderror</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Stock Unit</td>
                      <td><input type="text" name="pstock" id="pstock"class="form-control"value="{{old('pstock')}}">
                      @error("pstock")
<p style="color:red">{{$errors->first("pstock")}}</p>
@enderror</td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Warranty details</td>
                      <td><input type="text" name="pwar" id="pwar"class="form-control"value="{{old('pwar')}}">
                      @error("pwar")
<p style="color:red">{{$errors->first("pwar")}}</p>
@enderror</td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->




          <div class="col-md-6">
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
                      <td><input type="text" name="pheight" placeholder="in CM" id="pheight"class="form-control"value="{{old('pheight')}}">
                      @error("pheight")
<p style="color:red">{{$errors->first("pheight")}}</p>
@enderror</td>
                      </tr>
                      <tr>
                      <td>2.</td>
                      <td>Weight</td>
                      <td><input type="text" name="pweight"  placeholder="in Pounds"id="pweight"class="form-control"value="{{old('pweight')}}">
                      @error("pweight")
<p style="color:red">{{$errors->first("pweight")}}</p>
@enderror</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Width</td>
                      <td><input type="text" name="pwidth"  placeholder="in CM"id="pwidth"class="form-control"value="{{old('pwidth')}}">
                      @error("pwidth")
<p style="color:red">{{$errors->first("pwidth")}}</p>
@enderror</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Length</td> 
                      <td><input type="text" name="plen" id="plen" placeholder="in CM"class="form-control"value="{{old('plength')}}">
                      @error("plen")
<p style="color:red">{{$errors->first("plen")}}</p>
@enderror</td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Images</td>
                      <td><input type="file" name="pimage" id="pimage"class="form-control"value="{{old('pimage')}}">
                      @error("pimage")
<p style="color:red">{{$errors->first("pimage")}}</p>
@enderror</td>
                    </tr>
                    
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
                      <td><input type="checkbox" name="pret" id="pret" value="1"> YES </td>
                      <td><input type="checkbox" name="pret" id="pret" value="0"> NO </td>
                      </tr>
                      <tr>
                      <td>2.</td>
                      <td>Free delivery</td>
                      <td><input type="checkbox" name="pdelyes" id="pdelyes"value="1"> YES</td>
                      <td><input type="checkbox" name="pret" id="pret" value="0"> NO </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Returnable</td>
                      <td><input type="checkbox" name="preturn" id="pretur"value="1"> YES </td>
                      <td><input type="checkbox" name="pret" id="pret" value="0"> NO </td>
                    </tr>

                    <td align ="center"colspan="4"><input type="submit" name="submit" class="submit btn btn-success" value="Add +" style="height:307px;width:490px;font-size: 100px;"></td>

                   
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
@endsection















