$(document).ready(function() {
    employeeTable();
})

const employeeTable = () => {
    $.ajax({
        url: '/hr/employees/all',
        method: 'GET',
        dataType: 'json',
        success: function(response) {
            console.log("Employee: ", response)
            $('#employeeTable').DataTable({
                data: response,
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'email' },
                    { data: 'position' },
                    {
                        data: 'status',
                        render: function(data, type, row) {
                            // Badge rendering logic
                            let badgeClass = '';
                            switch (data.toLowerCase()) {
                                case 'active':
                                    badgeClass = 'status-btn success-btn';
                                    break;
                                case 'disabled':
                                    badgeClass = 'status-btn close-btn';
                                    break;
                                default:
                                    badgeClass = 'badge me-1 bg-secondary';
                            }
                            return `<span class="${badgeClass}">${data}</span>`;
                        }
                    },
                    { data: 'action' }
                ],
                destroy: true
            })
        },
        error: function(xhr) {
            console.log("ERROR: " + xhr.responseText)
        }
    })
}