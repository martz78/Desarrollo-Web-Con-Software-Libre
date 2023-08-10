<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio#5</title>
    <script src="premio.js" ></script>
</head>
<body>
    <h1>Premios por Puntos</h1>
     <label id= "mensaje"for=""></label>
     <button id="Puntos" >Juega</button>

     <p>Desarrolle un ejercicio que permita mostrar los premios que un usuario se puede ganar
    según la cantidad de puntos que acumule en un juego de competencias.
    <p>100pts gana $40.00</p>
    <p>200pts gana $60.00</p>
    <p>400pts gana $80.00</p>
    <p>500pts gana $100.00</p>
    Los puntos a ganar deben de ser exactos si no lo es asi el usuario lastimosamente pierde y
    los puntos no pasan de 500.</p>


     <form action="" method="post">
        <label>Cambie los puntos </label>
        <input type="number" id="puntos" name="premios" >
        <input type="submit" value="Canjear">
        
    </form>
    <?php
     if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
        $puntos = floatval($_POST["premios"]);
        
        if($puntos==100){
           echo "<p>Gano 50 puntos</p>";

        }
  
    }
    
    ?>
</body>
</html>