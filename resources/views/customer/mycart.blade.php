@extends('customer.customerdas')
@section('body')
@foreach($cartresult as $val)
                               
<style>
.card {
  box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
  background-color: GhostWhite;
  font-family: arial;
  color: black;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
img {
    border-radius: 40%;
}

.card button:hover {
  opacity: 0.7;
}
</style>
                             
<br>
<br>
                       

<main >
 

 <div class="card">
 <img class ="img"src="{{asset('uploads/images/'.$val->image)}}"height="100px" width="100px">
 <b>{{$val->name}}<br>
 {{$val->description}}📃<br>

 <lable><b>Quantity</b></lable><input type="number" class="card" name="quantity" id="quantity"value="0" >   <br>
 <lable><b>Amount</b></lable> <input type="text"  class="form-control" value="{{$val->price}}" id="price"name="price">   <br>

 </div>

</main>
<br><br>
<br><br>



<main >
 


</main>
<br><br>

@endforeach

<lable><b>Total</b></lable> <input type="text"  class="form-control" value="0" id="total"name="total">   <br>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   


<script>
  
    $(document).ready(function(){
    $('#quantity').on('change',function() {
       
      var price = $('#price').val();
      var quantity = +$(this).val();
      $("#total").text("$" + price * quantity);
      $quantity.val(Math.min(parseInt($quantity.val()) + 1, 999)).trigger('input');
 
        // alert ('hi');

    // var row = $(this).closest('tr');
    // var p = $('#price').val();
    // var pid = parseInt(row.find(".pid").val());
    // var qty = parseInt(row.find(this).val());
    // var price = parseInt(row.find('#price').val());
    // // var total =  parseInt(qty)*parseInt(price);
    // location.reload(true);
    // //  $("#tot_amount").val(total);
    //         $.ajax({
    //                 url: "{% url 'cartupdate' %}",
    //                 method: 'post',
    //                 cache: false,
    //                 data: {
    //                     pid: pid,
    //                     qty: qty,
    //                     price: price,
    //                 },

    //                 success: function(response) {
    //                     alert(data.message)
    //                     console.log(response);
    //                 }
    //             });

    });
});

    </script>  

@endsection
