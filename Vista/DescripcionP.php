<?php
session_start();
include('conexion.php');
$idProducto = $_GET['idProducto'];
$consulta="select * from producto where idProducto=$idProducto";
$resultado=mysqli_query($conn,$consulta);
$data=mysqli_fetch_row($resultado);
$_SESSION['dataP'] = $data;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
    <!--ESTILOS-->
    <link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>
    <section class="detalle">
        <h1 class="titulo">Detalles</h1>
        <div class="form-container">
            <form action="OrdenPedido.php" method="POST">
                <img class="imagen" src="<?php echo $data[4]?>" alt="">
                <div class="nombre"><h1><?php echo $data[1]?></h1></div>
                <div class="descripcion">Descripcion: </div>
                <div class="texto"><?php echo $data[3]?></div>
                <input type="hidden" name="PrecioC" value="<?= $data[2]; ?>">
                <div class="precio">Precio: S/.<?php echo $data[2]?>.00</div>
                <h1>Elija su cantidad</h1>
                <input type="number" id="fcan" name="Scantidad" max="10" min="1" required class="box">
                <input type="submit" name="CalOrden" value="Siguiente" class="btn">
            </div>
        </div>
    </section>
</body>
</html>
