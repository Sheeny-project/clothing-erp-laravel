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
                    { data: 'supplier' },
                    { data: 'quantity' },
                    { data: 'status' },

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