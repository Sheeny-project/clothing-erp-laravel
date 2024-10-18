$(document).ready(function() {
    getPendingRequests();
    getApprovedStocks()
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

const getApprovedStocks = () => {
    $.ajax({
        url: '/inventory/approved',
        method: 'GET',
        dataType: 'json',
        success: function(response) {
            console.log("Approved: ", response);
            response.forEach(data => {
                $('#approved_stocks').append(
                    `<tr>
                        <td class="employee-info">
                          <h5 class="text-medium fw-bold">${data.product}</h5>
                          <p class="fw-bold">Quantity: <span class="fw-normal">${data.quantity}</span></p>
                          <p class="fw-bold">Supplier: <span class="fw-normal fst-italic">${data.supplier}</span></p>
                        </td>
                        <td>
                          <div class="d-flex justify-content-end">
                            <span class="badge me-1 bg-success">${data.status}</span>
                          </div>
                        </td>
                      </tr>`
                )
            })
        },
        error: function(xhr, status, error) {
            console.log(1);
            console.error("Error fetching user data:", status);
            console.error("Error fetching user data:", xhr.responseText);
        }
    });
}