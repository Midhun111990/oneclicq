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














