$(document).ready(function() {
    $('#company_reg').on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        // formData.append('companyID', companyID); 

        $.ajax({
            url: './includes/functions/registerproject', // Change this to the path of your server-side script
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                // Assuming the response is in JSON format
                var jsonResponse = JSON.parse(response);


                if (jsonResponse.code === 200) {
                    // alert('Newa Cashier Added Successfully!');
                    // window.location.href = "./dashboard";
                     $('#company_reg')[0].reset();
                    Swal.fire({
                        title: jsonResponse.message,
                        icon: "success",
                        draggable: true
                      });

                } else if (jsonResponse.code === 404) {
                    // alert('Error: ' + jsonResponse.message);
                    // swal("Sorry!", jsonResponse.message , "error");
                    Swal.fire({
                        title: jsonResponse.message,
                        icon: "error",
                        draggable: true
                    });
                } else if (jsonResponse.code === 500) {
                    // alert('Error: ' + jsonResponse.message);
                    swal("Sorry!", jsonResponse.message, "error");
                } else {
                    alert('An unexpected error occurred. Please try again.');
                }
            },
            error: function() {
                // alert('An error occurred while adding the company. Please try again.');
                swal("Sorry!", "An error occurred while adding the company. Please try again.", "error");
            }
        });
    });
});