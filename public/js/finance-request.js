$(document).ready(function() {
    returnRequest();
});

const returnRequest = () => {
    $.ajax({
        url: '/finance/request/show',
        method: 'GET',
        dataType: 'json',
        success: function(response) {
            $('#requestTable').DataTable({
                data: response,
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'image' },
                    { data: 'quantity' },
                    { data: 'price' },
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

$(document).on('click', '#dtls-btn', function() {
    var id = $(this).attr('data-id');
    var image = $(this).attr('data-image');
    var price = $(this).attr('data-price');
    var quantity = $(this).attr('data-quantity');
    var name = $(this).attr('data-name');
    var supplier = $(this).attr('data-supplier');
    $('#show-details').modal('show');
    $('#name').val(name)
    $('#order_id').val(id)
    $('#quantity').val(quantity)
    $('#supplier').val(supplier)
    $('#price').val(price)
});

$('#submitForm').click(function(e) {
    e.preventDefault();

    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    // Collect input values, including inventory_request_id
    var id = $('#order_id').val();
    console.log(id);
    // Ensure inventory_request_id is not empty or null
    if (!id) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Inventory Request ID is required.'
        });
        return;
    }

    $.ajax({
        url: '/finance/request/submit/' + id,
        method: 'POST',
        contentType: 'application/json',
        headers: {
            'X-CSRF-Token': csrfToken
        },
        success: function(response) {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: response.message,
                timer: 2000,
                showConfirmButton: false
            });
        },
        error: function(xhr) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                html: xhr.responseText
            });
        }
    });
});