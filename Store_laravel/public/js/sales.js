
    const form = document.getElementById('form');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        const tableBody = document.getElementById('table');
        const productName = document.getElementById('product').value;
        const quantity = parseInt(document.getElementById('quantity').value);
        let price = 0;

        for (const product of products) {
            if (product.product_name === productName) {
                price = product.price;
                break;
            }
        }

        const total = price * quantity;

        const newRow = tableBody.insertRow(-1);

        const cell1 = newRow.insertCell(0);
        const cell2 = newRow.insertCell(1);
        const cell3 = newRow.insertCell(2);
        const cell4 = newRow.insertCell(3);

        cell1.innerHTML = productName;
        cell2.innerHTML = price;
        cell3.innerHTML = quantity;
        cell4.innerHTML = total;
        form.reset();
    });