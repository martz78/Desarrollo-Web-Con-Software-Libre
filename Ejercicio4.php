<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio#2</title>
</head>

<body>

<p>Desarrollar un ejercicio que permita llevar la cuenta del crédito que un usuario obtiene en
un juego. Ejemplo si el usuario agarra una máquina de Street Fighter que el juego cuesta
$1 hasta que pierda y deposita directamente $5 mostrar el mensaje “sigue jugando…”
hasta que se le acaben los $5. </p>

   
    <?php
   $restante =0;
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $jugada = floatval($_POST["jugada"]);
       if($jugada>0){
        
        $restante=$jugada-1;

        if($restante==0){
           echo "<p>Su saldo es insuficiente, deposita directamente</p>";
        }else{
            echo"<p>Sigue Jugando...</p>";

        }
        }
        
    }
    ?>
     <form action="" method="post">
        <label>La maquina de SF ingrese el dinero cuesta $1 cada jugada</label>
        <input type="number" name="jugada" value="<?php echo $restante ?>">
        <input type="submit" value="Jugar">
    </form>
    
</body>
</html>
