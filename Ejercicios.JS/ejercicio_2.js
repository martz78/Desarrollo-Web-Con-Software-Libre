function validarFormulario() {
    var nombre = document.getElementById("nombre");
    var dui = document.getElementById("dui");
    var fechaNacimiento = document.getElementById("fechaNacimiento");
    var genero = document.getElementById("genero");
    var departamento = document.getElementById("departamento");

    if (nombre.value === "") {
        nombre.classList.add("input-gray");
    } else {
        nombre.classList.remove("input-gray");
        nombre.classList.add("input-white");
    }

    if (dui.value === "") {
        dui.classList.add("input-gray");
    } else {
        dui.classList.remove("input-gray");
        dui.classList.add("input-white");
    }

    if (fechaNacimiento.value === "") {
        fechaNacimiento.classList.add("input-gray");
    } else {
        fechaNacimiento.classList.remove("input-gray");
        fechaNacimiento.classList.add("input-white");
    }

    if (genero.value === "") {
        genero.classList.add("input-gray");
    } else {
        genero.classList.remove("input-gray");
        genero.classList.add("input-white");
    }

    if (departamento.value === "") {
        departamento.classList.add("input-gray");
    } else {
        departamento.classList.remove("input-gray");
        departamento.classList.add("input-white");
    }
}