table = document.getElementById("table");
tr = table.getElementsByTagName("tr");
formNewBook = document.querySelector(".form_new_book_container");

for (let i = 0; i < tr.length; i++) {
    tr[i].onclick = function() {
        let url = window.location.href;
        let page = url.split("page=")[1].split("&")[0];
        let isbn = this.cells[0].innerHTML;
        let newUrl = url.split("page=")[0] + "page=" + page + "&isbn=" + isbn;
        window.location.href = newUrl;
    }
}

