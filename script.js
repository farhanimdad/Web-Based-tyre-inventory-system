function fetchInventory() {
    fetch('inventory.php')
        .then(response => response.json())
        .then(data => {
            const tableBody = document.querySelector('#inventoryTable tbody');
            tableBody.innerHTML = ''; 

            data.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.tyre_size}</td>
                    <td>${item.tyre_number}</td>
                    <td>${item.price}</td>
                    <td>${item.quantity}</td>
                    <td>
                        <button onclick="deleteItem(${item.id})">Delete</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        });
}
document.getElementById('addForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const tyre_size = document.getElementById('tyre_size').value;
    const tyre_number = document.getElementById('tyre_number').value;
    const price = document.getElementById('price').value;
    const quantity = document.getElementById('quantity').value;

    const data = { tyre_size, tyre_number, price, quantity };

    fetch('add_item.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(result => {
        if (result.success) {
            fetchInventory();
            alert('Tyre added successfully!');
        } else {
            alert('Failed to add tyre.');
        }
    });

    document.getElementById('addForm').reset();
});

function deleteItem(id) {
    fetch(`delete_item.php?id=${id}`, {
        method: 'GET',
    })
    .then(response => response.json())
    .then(result => {
        if (result.success) {
            fetchInventory();
            alert('Tyre deleted successfully!');
        } else {
            alert('Failed to delete tyre.');
        }
    });
}
fetchInventory();
document.addEventListener('DOMContentLoaded', function () {
    const footer = document.querySelector('footer');
    const body = document.body;
    const html = document.documentElement;
    const footerHeight = footer.offsetHeight;

    // Ensure footer is fully visible
    if (body.offsetHeight + footerHeight < window.innerHeight) {
        body.style.paddingBottom = ${footerHeight}px;
    }
});