<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validaciones</title>
</head>

<body style="background:linear-gradient(30deg, rgb(0, 0, 0),rgb(128, 128, 128),	rgb(192, 192, 192)); text-align: center;">

    <form action="" id="formulario">
    <br><br>
        <label for="">Digite un nombre y evalue si inicia con M, O, P ó S</label> <br><br>
        <input type="text" id="nombre" pattern="[MOPS].*" required> <br><br>
        <hr>
        <label for="">Digite una direccion e identifique si existe la palabra casa o apartamento al incio de la cadena</label> <br><br>
        <input type="text" pattern="^(casa|apartamento)\b.*" required> <br><br>
        <hr>
        <label for="">Identifique al final de la cadena si el correo escrito es gmail.com</label> <br><br>
        <input type="email" pattern=".*@gmail\.com$" required> <br><br>
        <hr>
        <label for="">Escriba un texto el que sea e identifique cuantas palabras finalizan con "as"</label> <br><br>
        <input type="text" id="texto" required> <br><br>
        <hr>
        <label for="">Identificar si el numero de telefono es de casa iniciando con el numero 2 o celular inciando con el numero 7</label> <br><br>
        <input type="text" id="telefono" required> <br><br>
        <hr>
        <label for="">Identificar la compañia de celular suponiendo que 79 ó 72 es tigo , 77 ó 75 es movistar y 71 ó 73 es digicel</label> <br><br>
        <input type="text" id="celular"> <br><br>
        <hr>
        <label for="">Identificar el patron de genero digitado en mayusculas o minusculas, masculino es 1 , femenino es 2</label> <br><br>
        <input type="text" id="genero"> <br><br>
        <hr><br>
        <input type="submit" value="Evaluar">
    </form>

    <script>
        const formulario = document.getElementById('formulario');

        formulario.addEventListener('submit', validacionesG);

        function validacionesG(e) {
            e.preventDefault();

            const texto = document.getElementById('texto').value;
            const palabras = texto.split(/\s+/);
            const expresionRegular = /as\b/gi;

            let contador = 0;
            palabras.forEach(palabra => {
                if (expresionRegular.test(palabra)) {
                    contador++;
                }
            });

            alert(`El texto contiene ${contador} palabra(s) que terminan con "as".`);

            const numeroTelefono = document.getElementById('telefono').value;
            const expresionTelefonoCasa = /^2\d{7}$/; 
            const expresionTelefonoCelular = /^7\d{7}$/; 

            if (expresionTelefonoCasa.test(numeroTelefono)) {
                alert('El número es de casa.');
            } else if (expresionTelefonoCelular.test(numeroTelefono)) {
                alert('El número es de celular.');
            } else {
                alert('El número no corresponde a un teléfono válido.');
            }

            const numeroTelefono2 = document.getElementById('celular').value;
        const prefijo = numeroTelefono2.substring(0, 2);

        let compania = '';

        switch (prefijo) {
            case '79':
            case '72':
                compania = 'Tigo';
                break;
            case '77':
            case '75':
                compania = 'Movistar';
                break;
            case '71':
            case '73':
                compania = 'Digicel';
                break;
            default:
                compania = 'Compañía no identificada';
                break;
        }

        alert(`El número ingresado pertenece a ${compania}.`);

        const patronGenero = document.getElementById('genero').value.toLowerCase();

        let resultado = '';

        switch (patronGenero) {
            case 'masculino':
            case '1':
                resultado = '1 (Masculino)';
                break;
            case 'femenino':
            case '2':
                resultado = '2 (Femenino)';
                break;
            default:
                resultado = 'Patrón de género no reconocido';
                break;
        }

        alert(`El patrón de género ingresado corresponde a: ${resultado}.`);
    }
    </script>
</body>

</html>