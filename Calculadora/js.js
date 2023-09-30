
    var operacion = prompt("Por favor, seleccione la operación que desea realizar:\n1. Suma\n2. Resta\n3. Multiplicación\n4. División");

    operacion = parseInt(operacion);

    if (operacion >= 1 && operacion <= 4) {
        
        var numero1 = parseFloat(prompt("Ingrese el primer número:"));
        var numero2 = parseFloat(prompt("Ingrese el segundo número:"));

        var resultado;

        if (operacion === 1) {
            resultado = numero1 + numero2;
            document.write("Resultado de la suma: " + resultado);
        } else if (operacion === 2) {
            resultado = numero1 - numero2;
            document.write("Resultado de la resta: " + resultado);
        } else if (operacion === 3) {
            resultado = numero1 * numero2;
            document.write("Resultado de la multiplicación: " + resultado);
        } else {
          
            if (numero2 === 0) {
                document.write("Error: No se puede dividir por cero.");
            } else {
                resultado = numero1 / numero2;
                document.write("Resultado de la división: " + resultado);
            }
        }
    }
    