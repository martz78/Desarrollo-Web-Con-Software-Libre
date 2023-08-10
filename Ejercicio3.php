<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio#3</title>
</head>
<body>
<p>En este ejercicio debe pensar en la lógica sobre lo que se pide, Los usuarios que usan esta
pagina les gustan las imágenes de Pokémon en formato gif. Se solicita desarrollar en el
ejercicio con un bucle la forma de como colocar la cantidad de imágenes gif de un mismo
Pokémon solicitado por un usuario. </p> 

<form method="post" action="Ejercicio3.php">
    <label for="numero">Ingresa un número:</label>
    <input type="number" name="numero" id="numero" required>
    <input type="submit" value="Enviar">
</form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];


    for($i=0; $i<$numero; $i++){
        echo "<img src='pokemon.webp' width='300' height='220'>";
        }
}
    ?>
</body>
</html>
