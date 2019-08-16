function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    var y = document.forms["myForm"]["email"].value;
    var z = document.forms["myForm"]["datetime"].value;
    var a = document.forms["myForm"]["phone"].value;
    var b = document.forms["myForm"]["service"].value;
    var p = document.forms["myForm"]["privacy"].checked;

    var i = 0;

    if (x == "") {
        i = 1;
        $('#name-error').show();
        $('#icon-name-error').show();
    }

    if (y == "") {
        i = 1;
        $('#email-error').show();
        $('#icon-email-error').show();
    }

    if (z == "") {
        i = 1;
        $('#datetime-error').show();
    }

    if (a == "") {
        i = 1;
        $('#phone-error').show();
    }

    if (b == "") {
        i = 1;
        $('#service-error').show();
    }

    if (!p) {
        i = 1;
        $('#privacy-error').show();
    }

    if (i == 1) {
        return false;
    }

}

$(document).ready(function () {
    var dateNow = new Date();

    $('#datetime').datetimepicker({
        dateFormat: 'dd-m-yy',
        minDate: 0,
        maxDate: '+5Y',
        duration: '',
        constrainInput: false,
        timeFormat: 'hh:mm',
        onSelect: function (dateTimeText) {
            if (dateTimeText) {
                $('#datetime-error').hide();
            }
        }
    });

    $("#phone").intlTelInput({
        preferredCountries: ["gb", "us"],
        utilsScript: "./utils.js"
    });
    // var instance = window.intlTelInputGlobals.getInstance();

    // //////// telephone code - start//////
    // var input = document.querySelector("#phone"),
    //     errorMsg = document.querySelector("#phone-error"),
    //     validMsg = document.querySelector("#phone-valid");

    // // here, the index maps to the error code returned from getValidationError - see readme
    // var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

    // // initialise plugin
    // // var iti = window.intlTelInput(input, {
    // //     utilsScript: "./utils.js"
    // // });

    // var reset = function () {
    //     input.classList.remove("error");
    //     errorMsg.innerHTML = "";
    //     errorMsg.classList.add("hide");
    //     validMsg.classList.add("hide");
    // };

    // // on blur: validate
    // input.blur(function () {
    //     reset();
    //     if (input.value.trim()) {
    //         if (iti.isValidNumber()) {
    //             validMsg.classList.remove("hide");
    //         } else {
    //             input.classList.add("error");
    //             var errorCode = iti.getValidationError();
    //             errorMsg.innerHTML = errorMap[errorCode];
    //             errorMsg.classList.remove("hide");
    //         }
    //     }
    // });

    // // on keyup / change flag: reset
    // input.addEventListener('change', reset);
    // input.addEventListener('keyup', reset);
    //////// telephone code - end ///////

    $('#service').select2();

    $('#service').on('select2:selecting', function (event) {
        var data = event.params.args.data.id;
        if (data) {
            $('#service-error').hide();
        } else {
            $('#service-error').show();
        }
    });

    // focus the error elements
    $('#name-error').click(function () {
        $('#name').focus();
    });
    $('#name-error-length').click(function () {
        $('#name').focus();
    });
    $('#name-error-valid').click(function () {
        $('#name').focus();
    });
    $('#email-error').click(function () {
        $('#email').focus();
    });
    $('#email-error-valid').click(function () {
        $('#email').focus();
    });
    $('#datetime-error').click(function () {
        $('#datetime').focus();
    });
    $('#phone-error').click(function () {
        $('#phone').focus();
    });
    $('#service-error').click(function () {
        $('#service').focus();
    });
    $('#privacy-error').click(function () {
        $('#privacy').focus();
    });

    $('#name').keyup(function (event) {
        var val = event.target.value;
        if (val) {
            $('#name-error').hide();
            $('#icon-name-error').hide();
        }
        if (val && val.length < 10) {
            $('#name-error-length').show();
            $('#icon-name-error').show();
        } else {
            $('#name-error-length').hide();
            $('#icon-name-error').hide();
        }
        if (val && /^[a-zA-Z0-9- ]*$/.test(val) === false) {
            $('#name-error-valid').show();
            $('#icon-name-error').show();
        } else {
            $('#name-error-valid').hide();
            $('#icon-name-error').hide();
        }
    });

    $('#email').keyup(function (event) {
        var val = event.target.value;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (val) {
            $('#email-error').hide();
        }
        if (val && emailReg.test(val) === false) {
            $('#email-error-valid').show();
            $('#icon-email-error').show();
        } else {
            $('#email-error-valid').hide();
            $('#icon-email-error').hide();
        }
    });

    $('#phone').keyup(function (event) {
        var val = event.target.value;
        if (val) {
            $('#phone-error').hide();
        } else {
            $('#phone-error').show();
        }
    });

    $('#service').click(function (event) {
        var val = event.target.value;
    });

    $('#privacy').click(function (event) {
        var val = event.target.checked;
        if (val) {
            $('#privacy-error').hide();
        } else {
            $('#privacy-error').show();
        }
    });
});