<!DOCTYPE html>
<html>
<head>
<title> Ejercicio#1</title>
</head>
<body>
    <p>Desarrolle un ejercicio que le permita a un usuario según el salario que devenga
mensualmente, calcularle la cantidad que se le puede descontar de manera mensual si
solicita un crédito bancario. Las condiciones son las siguientes:
<p>• Hasta $450.00 descontar 8%.</p>
<p>• Hasta $600.00 descontar 15%.</p>
<p>• Hasta $800.00 descontar 18% </p>
<p>• Mas $1000.00 descontar 20%.</p>
</p>
    <form action="" method="post">
        <label>Porfavor ingrese su salario mensual:</label>
        <input type="number" name="Salario" step="0.01" required>
        <input type="submit" value="Descuento">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      
        $Salario = floatval($_POST["Salario"]);

        function Descuento($Salario) {
            if ($Salario <= 450) {
                return $Salario * 0.08;

            } elseif ($Salario <= 600) {
                return $Salario * 0.15;

            } elseif ($Salario <= 800) {
                return $Salario * 0.18;
            } else {
                return $Salario * 0.20;
            }
        }

   
        $descuento = Descuento($Salario);

 
        echo "<p>Descuento mensual: $" . number_format($descuento, 2) . "</p>";
    }
    ?>
</body>
</html>
