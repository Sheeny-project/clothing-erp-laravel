$(document).ready(function() {
    showImage();

});
const ModalProductType = () => {
    $("#ModalOne").modal("show");
}

$('#addProductType').on('submit', function(e) {
    e.preventDefault(); // Prevent the form from submitting traditionally

    // Send AJAX request
    $.ajax({
        url: '/supplier/addtype', // Adjust to your route
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
            $('#addProductType')[0].reset();
            $("#ModalOne").modal("hide");
        },
        error: function(xhr) {
            // Handle validation errors
            if (xhr.status === 422) {
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
            } else {
                // Handle other errors
                Swal.fire({
                    title: 'Error!',
                    text: 'Something went wrong!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        }
    });
});

const showImage = () => {

    const imageInput = document.getElementById('profileImageInput');
    const imagePlaceholder = document.getElementById('profileImagePlaceholder');

    imageInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                imagePlaceholder.setAttribute('src', event.target.result);
            }
            reader.readAsDataURL(file);
        }
    });
}

$(document).on('click', '#submitForm', function(e) {
    e.preventDefault();
    console.log('click')
    var form = $('#addStock')[0]; // Get the form element
    var formData = new FormData(form); // Use FormData to handle file uploads

    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: '/supplier/add/stock',
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
            $('#addStock')[0].reset();
            $('#profileImageInput').addClass('d-none'); // Hide the image preview after form reset
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