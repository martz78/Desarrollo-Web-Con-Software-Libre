<?php
require '../conf/con.php';

$query = "SELECT * FROM medicamentos";
$ejecutar = $pdo->prepare($query);
$ejecutar->execute();
$data = $ejecutar->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td{
        border: solid;
    }
</style>
<body style="background-color: #E0E0E1;">
    <table style="border: solid;">
        <thead>
            <th hidden>Codigo</th>
            <th>Nombre</th>
            <th>Existencia</th>
            <th>Fecha Registro</th>
            <th>Precio</th>
            <th>Imagen</th>
        </thead>
        <tbody>
            <?php
            foreach ($data as $medicamento) {
            ?>
                <tr>
                    <td hidden><?=$medicamento->code?></td>
                    <td><?= $medicamento->nombre ?></td>
                    <td><?= $medicamento->existencia ?></td>
                    <td><?= $medicamento->fecharegistro ?></td>
                    <td><?= $medicamento->precio ?></td>
                    <td><img style="width: 50; height:50;" src="../imgServer/<?=$medicamento->imagenes?>" alt=""></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>