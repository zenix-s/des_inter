const inpname = document.getElementById("nombre");
const spn_name = document.getElementById("spn-nombre");
const inpapellidos = document.getElementById("apellidos");
const spn_apellidos = document.getElementById("spn-apellidos");
const inpcorreo = document.getElementById("correo");
const spn_correo = document.getElementById("spn-correo");

inpname.addEventListener('keyup', (e) => {
    if(inpname.value.replaceAll(" ", "") === ""){
        spn_name.innerHTML = "Este campo es obligatorio";
        spn_name.style.color = "#ff0000"
    }else if((!(/^[a-zA-ZÀ-ÿ\ñ\Ñ]+(\s*[a-zA-ZÀ-ÿ\ñ\ñ]*)*[a-zA-ZÀ-ÿ\ñ\Ñ]+$/g).test(inpname.value)) || inpname.value.length > 30){
        spn_name.innerHTML = "Nombre no valido";
        spn_name.style.color = "#ff0000";
    }else{
        spn_name.innerHTML = "Nombre valido";
        spn_name.style.color = "#00962d";
    }
});

inpapellidos.addEventListener('keyup', (e) => {
    if(inpapellidos.value.replaceAll(" ", "") === ""){
        spn_apellidos.innerHTML = "Este campo es obligatorio";
        spn_apellidos.style.color = "#ff0000"
    }else if((!(/^[a-zA-ZÀ-ÿ\ñ\Ñ]+(\s*[a-zA-ZÀ-ÿ\ñ\ñ]*)*[a-zA-ZÀ-ÿ\ñ\Ñ]+$/g).test(inpapellidos.value)) || inpapellidos.value.length > 100){
        spn_apellidos.innerHTML = "Apellido no valido";
        spn_apellidos.style.color = "#ff0000";
    }else{
        spn_apellidos.innerHTML = "Apellido valido";
        spn_apellidos.style.color = "#00962d";
    }
});

inpcorreo.addEventListener('keyup', (e) => {
    if(inpcorreo.value.replaceAll(" ", "") === ""){
        spn_correo.innerHTML = "Este campo es obligatorio";
        spn_correo.style.color = "#ff0000"
    }else if((!(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g).test(inpcorreo.value)) || inpcorreo.value.length > 150){
        spn_correo.innerHTML = "Correo no valido";
        spn_correo.style.color = "#ff0000";
    }else{
        spn_correo.innerHTML = "Correo valido";
        spn_correo.style.color = "#00962d";
    }
});