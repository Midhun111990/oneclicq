
@extends('customer.customerdas')
@section('body')
<form id="agreevendor_form" novalidate action="/updateorderpoint"  method="post" class="brand" enctype="multipart/form-data"> 
  @csrf




<br>
<br>
<br>
                               
<style>

.styled-table {
    
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 1.1em;
    font-family: sans-serif;
    min-width: 400px;
    text-align: center;
    box-shadow: 0 0 20px rgba(0, 1, 0.12, 0.15);
    margin-top:10px ;
    margin-left:50px ;

}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: center;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

.styled-tables {
    
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 1.1em;
    font-family: sans-serif;
    min-width: 400px;
    text-align: center;
    box-shadow: 0 0 20px rgba(0, 1, 0.12, 0.15);
    margin-top:10px ;
    margin-left:50px ;

}
.styled-tables thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: center;
}
.styled-tables th,
.styled-tables td {
    padding: 12px 15px;
}
.styled-tables tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-tables tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-tables tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-tables tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

* {
  box-sizing: border-box;
}

.row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}


</style>
<br><br><br><br><br><br><br><br>
<div class="row" >
  <div class="column">
    <table>
      <tr>
      <th>Product</th>
    	<th>Image</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Total Price</th>
    <th>Earned Coins</th>
      
  </tr>
      @foreach($proresult as $val)

      <tr>

      
        <td>{{$val->name}}</td>
        <td><img src="{{asset('uploads/images/'.$val->image)}}"height="100px" width="100px"></td>
						<td>
						  <input type="text" readonly name="tot_price" id="tot_price" class="form-control tot_price" value="{{$val->price}}">
						</td>
						<td><input type="number" name="txt_qlty" id="txt_qlty" class="form-control txt_qlty" size="4" value="0" min="1" max="{{$val->stockunit}}"></td>
						<td> <input type="text" readonly name="tot_pr" class="form-control tot_pr"id="tot_pr" size="20" value="{{$val->price}}">
            <td><input type="text" readonly name="productpoints" id="productpoints" class="form-control coup"  ></td>
      
          </td>
      </tr>
      @endforeach
    </table>
    
  </div>

  
  
  <div class="column">
    <table>
       
    <tr>

        <th>Points</th>
       
        <td> @foreach($point as $po)
        @if($po->points==0)
          <h1>No Coins</h1>
          @else
          <input type="number"  name="points" id="points" value="0" max="{{$po->points}}" class="form-control coup"  >
         @endif
          @endforeach
      </td> 
      </tr>
      
      <tr>
        <th>Total</th>
        <td><input type="text" readonly name="finaltotal" id="finaltotal" class="form-control total"  ></td>
      </tr>
      <tr>
        <th>Grand Total</th>
        <td><input type="text" readonly name="gtotal" id="gtotal" class="form-control gtotal"  ></td>
      </tr>

<tr>      
     <td>&nbsp&nbsp&nbsp&nbsp   <input type="submit" name="submit" class="submit btn btn-success" value="Purchase" style="height:50px;width:180px;font-size: 20px;"> 
</td></tr>
    </table>
  </div>
  <br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br>



</div>

@if(session()->has('email'))
       @foreach($cusres as $val)
       <input type="hidden" name="cusid" id="cusid"class="form-control" value="{{$val->userid}}" />
                
  @endforeach        
        @endif   



<br><br><br><br><br><br><br><br>


</form>


@endsection






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".txt_qlty").change(function(){
    var row = $(this).closest('tr');
    var price = parseInt(row.find(".tot_price").val()); //get from hidden field  
  
    var poi = parseInt(row.find(".points").val()); //get from hidden field  
  
    var qty = parseInt(row.find(this).val());
   var total =  parseInt(qty)*parseInt(price);
  var coins= parseInt(parseInt(total)/150)*2;
  
  
   row.find("#tot_pr").val(total);
   
   $("#finaltotal").val(total);
   $("#productpoints").val(coins);
   $("#gtotal").val(total);
  
  });
});
</script>


<script>
$(document).ready(function(){
  $("#points").change(function(){
      var poi= $('#points').val();

      var tota= $('#finaltotal').val();

      var pointprice =  parseInt(parseInt(poi)*150)/2;

     

  var grandtotal =  parseInt(tota)-parseInt(pointprice);
  $("#gtotal").val(grandtotal);
 

  $.ajax({
        type:"get",
        url:"/reducecoin/"+cusid,
        data:{points:pointprice},
        success:function(result)
        
        {
          
          alert("Done");

        }
      });

 
  
  });
});
</script>

