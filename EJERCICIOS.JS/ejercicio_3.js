
function MostrarSeleccion() {
    const DepartamentoSelect = document.getElementById("Departamento");
    const GeneroSelect = document.getElementById("Genero");
    const EducacionSelect = document.getElementById("Educacion");

    const SeleccionDepartamento = Array.from(DepartamentoSelect.selectedOptions).map(option => option.value);
    const SeleccionGenero = Array.from(GeneroSelect.selectedOptions).map(option => option.value);
    const SeleccionEducacion = Array.from(EducacionSelect.selectedOptions).map(option => option.value);

    alert(`Departamento Seleccionado: ${SeleccionDepartamento.join(", ")}`);
    alert(`Género Seleccionado: ${SeleccionGenero.join(", ")}`);
    alert(`Educación Seleccionada: ${SeleccionEducacion.join(", ")}`);
}
