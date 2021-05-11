







//VENDOR

$("#obrand").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#obrand").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[A-Za-z\-\s]+$/;
   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#obrand").css("background-color", "pink");
       $('#name_error').html("Only Alphabets allowed.");
    }

    return isValid;
});

//business details


$("#companyname").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#companyname").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[A-Za-z\-\s]+$/;
   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#companyname").css("background-color", "pink");
       $('#name_error').html("Only Alphabets allowed.");
    }

    return isValid;
});


$("#officeno").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#officeno").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[0-9\.]*$/;

   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#officeno").css("background-color", "pink");
       $('#name_error').html("Only Digits allowed.");
    }

    return isValid;
});


$("#nameinbank").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#nameinbank").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[A-Za-z\-\s]+$/;
   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#nameinbank").css("background-color", "pink");
       $('#name_error').html("Only Alphabets allowed.");
    }

    return isValid;
});




$("#subcatname").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#subcatname").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[A-Za-z\-\s]+$/;
   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#subcatname").css("background-color", "pink");
       $('#name_error').html("Only Alphabets allowed.");
    }

    return isValid;
});


$("#catname").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#catname").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[A-Za-z\-\s]+$/;
   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#catname").css("background-color", "pink");
       $('#name_error').html("Only Alphabets allowed.");
    }

    return isValid;
});





$("#pgst").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#pgst").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[0-9\.]*$/;

   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#pgst").css("background-color", "pink");
       $('#name_error').html("Only Digits allowed.");
    }

    return isValid;
});

$("#pprice").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#pprice").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[0-9\.]*$/;

   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#pprice").css("background-color", "pink");
       $('#name_error').html("Only Digits allowed.");
    }

    return isValid;
});



$("#pmrp").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#pmrp").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[0-9\.]*$/;

   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#pmrp").css("background-color", "pink");
       $('#name_error').html("Only Digits allowed.");
    }

    return isValid;
});



$("#pstock").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#pstock").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[0-9\.]*$/;

   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#pstock").css("background-color", "pink");
       $('#name_error').html("Only Digits allowed.");
    }

    return isValid;
});


$("#pheight").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#pheight").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[0-9\.]*$/;

   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#pheight").css("background-color", "pink");
       $('#name_error').html("Only Digits allowed.");
    }

    return isValid;
});


$("#pweight").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#pweight").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[0-9\.]*$/;

   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#pweight").css("background-color", "pink");
       $('#name_error').html("Only Digits allowed.");
    }

    return isValid;
});


$("#pwidth").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#pwidth").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[0-9\.]*$/;

   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#pwidth").css("background-color", "pink");
       $('#name_error').html("Only Digits allowed.");
    }

    return isValid;
});

$("#plen").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#plen").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[0-9\.]*$/;

   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#plen").css("background-color", "pink");
       $('#name_error').html("Only Digits allowed.");
    }

    return isValid;
});



$("#mob").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#mob").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[0-9\.]*$/;

   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#mob").css("background-color", "pink");
       $('#name_error').html("Only Digits allowed.");
    }

    return isValid;
});

        $('#mob').keypress(function()
             {
                  var phone=$('#mob').val();
                if((phone.length!=9)||(phone.length>9))
                {
                      $("#mob").css("background-color", "pink");
                      $('#moberror').html("Enter only 10 digit.");
                }
                // return true;
                else{
                $("#mob").css("background-color", "white");
                $('#moberror').html("");
                }
        });




        $("#otp").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
        
            $("#otp").css("background-color", "white");
            $('#name_error').html("");
        
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[0-9\.]*$/;
        
           
        
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
               $("#otp").css("background-color", "pink");
               $('#name_error').html("Only Digits allowed.");
            }
        
            return isValid;
        });
       
        



        $("#name").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
        
            $("#obrand").css("background-color", "white");
            $('#name_error').html("");
        
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[A-Za-z\-\s]+$/;
           
        
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
               $("#name").css("background-color", "pink");
               $('#name_error').html("Only Alphabets allowed.");
            }
        
            return isValid;
        });
        
        




















//ADMIN


$("#businessname").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#businessname").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[A-Za-z\-\s]+$/;
   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#businessname").css("background-color", "pink");
       $('#name_error').html("Only Alphabets allowed.");
    }

    return isValid;
});




$("#catcommission").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#catcommission").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[0-9\.]*$/;

   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#catcommission").css("background-color", "pink");
       $('#name_error').html("Only Digits allowed.");
    }

    return isValid;
});



