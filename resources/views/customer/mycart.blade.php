
@extends('customer.customerdas')
@section('body')
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
       

<div class="row">
  <div class="column">
    <table>
      <tr>
      <th>Product</th>
    	<th>Image</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Total Price</th>
      </tr>
      @foreach($cartresult as $val)

      <tr>

        <td>{{$val->name}}</td>
        <td><img src="{{asset('uploads/images/'.$val->image)}}"height="100px" width="100px"></td>
						<td>
						  <input type="text" name="tot_price" id="tot_price" class="form-control tot_price" value="{{$val->price}}">
						</td>
						<td><input type="number" name="txt_qlty" id="txt_qlty" class="form-control txt_qlty"  value="1" min="1" max="{{$val->stockunit}}"></td>
						<td> <input type="text" name="tot_pr" class="form-control tot_pr"id="tot_pr" size="4" value="{{$val->price}}">
     					 </td>
      </tr>
      @endforeach
    </table>
    
  </div>


  <div class="column">
    <table>
      <tr>
        <th>Coupon</th>
        <td><input type="text" name="coup" id="coup" class="form-control coup"  ></td>
      </tr>
      <tr>
        <th>Total</th>
        <td><input type="text" name="total" id="total" class="form-control total"  ></td>
      </tr>
      <tr>
        <th>Grand Total</th>
        <td><input type="text" name="gtotal" id="gtotal" class="form-control gtotal"  ></td>
      </tr>

<tr>      
     <td>&nbsp&nbsp&nbsp&nbsp   <input type="submit" name="submit" class="submit btn btn-success" value="Purchase" style="height:50px;width:180px;font-size: 20px;"> 
</td></tr>
    </table>
  </div>
</div>




                <br>
<br><br>
<br>
<br>
<br>
<br>
<br>
    
                               
                                              
                                       
        









@endsection






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".txt_qlty").change(function(){
    var row = $(this).closest('tr');
    var price = parseInt(row.find(".tot_price").val()); //get from hidden field  
    var qty = parseInt(row.find(this).val());
   var total =  parseInt(qty)*parseInt(price);
    row.find("#tot_pr").val(total);
  });
});
</script>