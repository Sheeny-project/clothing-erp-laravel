$(document).ready(function() {
    getPendingRequests();
});

const getPendingRequests = () => {
    $.ajax({
        url: '/inventory/pending',
        method: 'GET',
        dataType: 'json',
        success: function(response) {
            console.log("Pending: ", response);
            $('#pending-order-tbl').DataTable({
                data: response,
                columns: [
                    { data: 'id' },
                    { data: 'product' },
                    { data: 'image' },
                    { data: 'quantity' },
                    {
                        data: 'status',
                        render: function(data, type, row) {
                            // Badge rendering logic
                            let badgeClass = '';
                            switch (data.toLowerCase()) {
                                case 'approved':
                                    badgeClass = 'status-btn success-btn';
                                    break;
                                case 'declined':
                                    badgeClass = 'status-btn close-btn';
                                    break;
                                case 'pending':
                                    badgeClass = 'status-btn warning-btn';
                                    break;
                                default:
                                    badgeClass = 'badge me-1 bg-secondary';
                            }
                            return `<span class="${badgeClass}">${data}</span>`;
                        }
                    }

                ],
                destroy: true // Reinitialize the table
            });
        },
        error: function(xhr, status, error) {
            console.log(1);
            console.error("Error fetching user data:", status);
            console.error("Error fetching user data:", xhr.responseText);
        }
    });
}
