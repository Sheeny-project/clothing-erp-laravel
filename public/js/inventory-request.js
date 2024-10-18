$(document).ready(function() {
    console.log("sdsds")
    $('#supplier-select').on('change', function() {
        var selOption = $(this).find('option:selected');

        var supplier = selOption.data('supplier');
        var price = selOption.data('price');
        var qty = selOption.data('qty');
        $('#supplier').val(supplier)
        $('#price').val(price)
        $('#quantity').attr('placeholder', qty)
    })
})

$(document).on('click', '#submitForm', function(e) {
    e.preventDefault();
    // console.log('click')
    var form = $('#requestStock')[0]; // Get the form element
    var formData = new FormData(form); // Use FormData to handle file uploads

    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: '/inventory/request/stock/make',
        method: 'POST',
        data: formData, // Pass the formData object
        processData: false, // Prevent jQuery from processing the data
        contentType: false, // Prevent jQuery from setting the content type
        headers: {
            'X-CSRF-Token': csrfToken // Include CSRF token in request headers
        },
        success: function(response) {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: response.message,
                timer: 2000,
                showConfirmButton: false
            });
            $('#requestStock')[0].reset();
        },
        error: function(response) {
            var errors = response.responseJSON.errors;
            var errorList = '';

            // Loop through errors and format them
            $.each(errors, function(key, value) {
                errorList += value + '<br>';
            });

            Swal.fire({
                icon: 'error',
                title: 'Error',
                html: errorList
            });
        }
    });
});