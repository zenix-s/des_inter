inputfile = document.getElementById("foto");
labelfile = document.getElementById("filename");
inputfile.addEventListener("change", function(){
    labelfile.innerHTML = inputfile.value;
});