<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio#2</title>
</head>

<body>
<p>Desarrolle un ejercicio que le permita Mostrar en una pantalla el cambien en efectivo que
le corresponde a un cliente al realizar una compra en una maquina dispensadora.
Ejemplo si se compra una soda en lata y cuesta $0.75 y si el usuario deposito un billete de
$5 se le debe de devolver $4.25. </p> 
<ul> 
   	<li>1. Churros $0.50</li> 
   	<li>2. Cerveza $1.00</li> 
   	<li>3. Chicles $0.90</li>
    <li>4. Gatorade $1.00</li>
    <li>5. Gomitas $0.50</li>
    <li>6. AMP $1.00</li>
    <li>7. Bombones $0.25</li>
    <li>8. Frutadado $0.75</li>
    <li>9. Chocolates $0.25</li>
    <li>10. Petit $0.60</li>

</ul>

    <form action="" method="post">
        <label>Ingrese el numero de producto que desea comprar </label>
        <input type="number" name="producto" required>
        <input type="submit" value="Comprar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
        $producto = floatval($_POST["producto"]);
        
        if($producto>0 && $producto<=10){
           echo "<form action='' method='post'>
           <label>Ingrese la cantidad de efectivo</label>
           <input type='number' name='efectivo' required>";

            echo"<input type='hidden' name='producto' value='$producto'>";

           echo "<input type='submit' value='fin de compra'>
       </form>";         

        }
        
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["efectivo"])){
        $producto = floatval($_POST["producto"]);
        $efectivo = floatval($_POST["efectivo"]);
        switch ($producto) {
            case '1':
                $cambio=$efectivo-0.5;
                echo "<p> Su producto es churro y su cambio es: $cambio</p>";
                break;
                case '2':
                    $cambio=$efectivo-1;
                    echo "<p> Su producto es cerveza Modelo y su cambio es: $cambio</p>";
                    break;
                    case '3':
                        $cambio=$efectivo-0.9;
                        echo "<p> Su producto es churro y su cambio es: $cambio</p>";
                        break;
                        case '4':
                            $cambio=$efectivo-1;
                            echo "<p> Su producto es gatorade y su cambio es: $cambio</p>";
                            break;
                            case '5':
                                $cambio=$efectivo-0.5;
                                echo "<p> Su producto es gomitas y su cambio es: $cambio</p>";
                                break;
                                case '6':
                                    $cambio=$efectivo-1;
                                    echo "<p> Su producto es AMP y su cambio es: $cambio</p>";
                                    break;
                                    case '7':
                                        $cambio=$efectivo-0.25;
                                        echo "<p>Su producto es bombones y su cambio es: $cambio</p>";
                                        break;
                                        case '8':
                                            $cambio=$efectivo-0.7;
                                            echo "<p>Su producto es frutaditos y su cambio es: $cambio</p>";
                                            break;
                                            case '9':
                                                $cambio=$efectivo-0.25;
                                                echo "<p>Su producto es chocolates y su cambio es: $cambio</p>";
                                                break;
                                                case '10':
                                                    $cambio=$efectivo-0.6;
                                                    echo "<p>Su producto es petit y su cambio es: $cambio</p>";
                                                    break;
            default:
                break;
        }
    }

    ?>
    
</body>
</html>

