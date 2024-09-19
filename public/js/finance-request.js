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
    $('#quantity').val(quantity)
    $('#supplier').val(supplier)
    $('#price').val(price)
});