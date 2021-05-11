
$("#mobile").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#mobile").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[0-9\.]*$/;

   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#mobile").css("background-color", "pink");
       $('#name_error').html("Only Digits allowed.");
    }

    return isValid;
});



$("#fname").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#fname").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[A-Za-z\-\s]+$/;
   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#fname").css("background-color", "pink");
       $('#name_error').html("Only Alphabets allowed.");
    }

    return isValid;
});

$("#lname").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

    $("#lname").css("background-color", "white");
    $('#name_error').html("");

    //Regex for Valid Characters i.e. Alphabets.
    var regex = /^[A-Za-z\-\s]+$/;
   

    //Validate TextBox value against the Regex.
    var isValid = regex.test(String.fromCharCode(keyCode));
    if (!isValid) {
       $("#lname").css("background-color", "pink");
       $('#name_error').html("Only Alphabets allowed.");
    }

    return isValid;
});
