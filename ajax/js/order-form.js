$(document).ready(function () {
    //Create attraction
    $("#order_now").click(function (event) {

        event.preventDefault();

        if (!$('#name').val() || $('#name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#address').val() || $('#address').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your address..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#city').val() || $('#city').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your city..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#phone').val() || $('#phone').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your phone number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        }else if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your email..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

   
        } else {
            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "ajax/php/order-form.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    swal({
                        title: "Success!",
                        text: "Your data was saved successfully!.....",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function () {
                        setTimeout(function () {
                            window.location.replace("order-form.php");
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });

   
  
});

