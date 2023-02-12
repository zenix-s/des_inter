const vendedoresTabla = document.getElementById('table');
const searchNameInput = document.getElementById('searchVenta');
const newVendedorButton = document.getElementById('new_venta');
const newVendedorForm = document.querySelector('.form_container');
const tr = vendedoresTabla.getElementsByTagName('tr');
function filterVendedores() {
    const searchName = searchNameInput.value.toLowerCase();
    const rows = vendedoresTabla.getElementsByTagName('tr');

    for (let i = 0; i < rows.length; i++) {
        const firstCol = rows[i].getElementsByTagName('td')[2];
        if (firstCol) {
            const textValue = firstCol.textContent || firstCol.innerText;
            if (textValue.toLowerCase().indexOf(searchName) > -1) {
                rows[i].style.display = '';
            } else {
                rows[i].style.display = 'none';
            }
        }
    }
}

searchNameInput.addEventListener('keyup', filterVendedores);

newVendedorButton.addEventListener('click', () => {
    newVendedorForm.classList.add('active');
});

for (let i = 0; i < tr.length; i++) {
    tr[i].onclick = function() {
        let url = window.location.href;
        let id = this.cells[0].innerHTML;
        let newUrl = url + "?id_venta=" + id;
        window.location.href = newUrl;
    }
}