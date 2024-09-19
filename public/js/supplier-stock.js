$(document).ready(function() {
    getStocksTable();
});

const getStocksTable = () => {
    $.ajax({
        url: '/supplier/get/stocks',
        method: 'GET',
        dataType: 'json',
        success: function(response) {
            console.log("Stocks: ", response);
            $('#stocksTable').DataTable({
                data: response,
                columns: [
                    { data: 'id' },
                    { data: 'product_name' },
                    { data: 'image' },
                    { data: 'product_type_id' },
                    { data: 'brand' },
                    { data: 'action' },

                ],
                destroy: true // Reinitialize the table
            });
        },
        error: function(xhr, status, error) {
            console.log(1);
            console.error("Error fetching user data:", xhr.responseText);
        }
    });
}

const showAddOns = (id) => {
    // console.log(id)
    $("#add-details").modal('show');
    $('#id').val(id)
}

$('#addProductDetails').on('submit', function(e) {
    console.log("sheesh")
    e.preventDefault(); // Prevent the form from submitting traditionally

    // Send AJAX request
    $.ajax({
        url: '/supplier/add/stocks/details', // Adjust to your route
        type: 'POST',
        data: $(this).serialize(), // Serialize form data
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            // Show success message with Swal
            Swal.fire({
                title: 'Success!',
                text: response.message, // Get success message from server
                icon: 'success',
                confirmButtonText: 'OK'
            });

            // Clear the form
            $('#addProductDetails')[0].reset();
            $("#add-details").modal("hide");
        },
        error: function(xhr) {
            // Handle validation errors
            let errors = xhr.responseJSON.errors;
            let errorMessage = '';

            // Loop through all errors
            for (let key in errors) {
                if (errors.hasOwnProperty(key)) {
                    errorMessage += errors[key] + '\n';
                }
            }

            // Show error alert with Swal
            Swal.fire({
                title: 'Error!',
                text: errorMessage,
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }
    });
});

$(document).on('click', '.view-details', function() {
    var id = $(this).attr('data-id');
    $("#show-dtls").modal("show");
    $.ajax({
        url: '/supplier/show/stocks/details/' + id,
        method: 'GET',
        dataType: 'json',
        success: function(response) {
            console.log("Details: ", response);
            $('#dtlsTable').DataTable({
                data: response,
                columns: [
                    { data: 'id' },
                    { data: 'size' },
                    { data: 'variant' },
                    { data: 'quantity' },
                    { data: 'price' },

                ],
                destroy: true // Reinitialize the table
            });
        },
        error: function(xhr, status, error) {
            console.log(1);
            console.error("Error fetching user data:", xhr.responseText);
        }
    });
});
