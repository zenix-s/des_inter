const user = document.getElementById('username');
const pass = document.getElementById('pass');

user.oninvalid = function() {
    this.setCustomValidity('El usuario debe tener entre 3 y 25 caracteres y no puede contener espacios en blanco ni caracteres especiales solo _ - letras y números');
}
user.oninput = function() {
    this.setCustomValidity('');
}

pass.oninvalid = function() {
    this.setCustomValidity('La contraseña debe tener entre 5 y 25 caracteres debe contener al menos una letra mayúscula, una minúscula, un número');
}
pass.oninput = function() {
    this.setCustomValidity('');
}
