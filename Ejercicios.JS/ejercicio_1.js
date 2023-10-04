function GuardarDatos() {
    var nombre = document.getElementById("nombre").value;
    var email = document.getElementById("email").value;
    var telefono = document.getElementById("telefono").value;
    var edad = document.getElementById("edad").value;
    var estadoCivil = document.getElementById("estado").value;

    console.log("Nombre: " + nombre);
    console.log("Email: " + email);
    console.log("Teléfono: " + telefono);
    console.log("Edad: " + edad);
    console.log("Estado Civil: " + estadoCivil);
}