<?php


require '../conf/con.php';

$nombre=$_POST['nombre'];
$existencia=$_POST['existencia'];
$fecharegistro=$_POST['fecharegistro'];
$precio=$_POST['precio'];
$imagen =$_FILES['imagen']['name'];
$ruta ="../imgServer/".$imagen;

move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);
$query = "INSERT INTO `medicamentos`( `nombre`, `existencia`, `fecharegistro`, `precio`, `imagenes`)
 VALUES (:nombre,:existencia,:fecharegistro,:precio,:imagenes)";
$ejecutar = $pdo->prepare($query);
$ejecutar->bindParam(":nombre",$nombre);
$ejecutar->bindParam(":existencia",$existencia);
$ejecutar->bindParam(":fecharegistro",$fecharegistro);
$ejecutar->bindParam(":precio",$precio);
$ejecutar->bindParam(":imagenes",$imagen);
$ejecutar->execute();
if($ejecutar){
    header('Location: ../index.php');
}

?>
