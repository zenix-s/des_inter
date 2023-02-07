const img = document.getElementById("bookCoverImg");
const imgInput = document.getElementById("bookCoverInput");

img.onclick = function() {
    imgInput.click();
}

imgInput.onchange = function() {
    const file = this.files[0];
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function() {
        img.src = reader.result;
    }
}