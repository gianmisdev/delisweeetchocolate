<?php
session_start();
if(isset($_SESSION['dataU'])){
    $sesion=$_SESSION['dataU'];
}else{
    unset($_SESSION['dataU']);
}
include('conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden de Pedido</title>   
    <!--ESTILOS-->
    <link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>
<section class="orden">
    <?php
    $UsuarioA = $_SESSION['dataU'];
    $ProductoD = $_SESSION['dataP'];
    if(is_array($UsuarioA) and is_array($ProductoD))
    {
        ?>
            <div class="form-container">
                <form action="DetallePedido.php" method="post">
                    <a href="/Vista/Index.php"><img src="img/logo.png" alt=""></a>
                    <h3>Orden del Pedido</h3>
                    <input type="hidden" name="Aid" value="<?= $UsuarioA[0]; ?>">
                    <input type="hidden" name="Pid" value="<?= $ProductoD[0]; ?>">
                    <div>
                        <label for="fnom">Nombres:</label>
                    <input type="text" id="fnom" name="Pnombre" value="<?=$UsuarioA[2];?>" required class="box">
                    </div>
                    <div>
                        <label for="fape">Apellidos:</label>
                        <input type="text" id="fape" name="Papellido" value="<?=$UsuarioA[3];?>" required class="box">
                    </div>
                    <div>
                        <label for="fpro">Producto: </label>
                        <input type="text" id="fpro" name="Ppro" value="<?=$ProductoD[1];?>" required class="box">
                    </div>
                    <div>
                        <label for="fdes">Descripción:</label>
                        <input type="text" id="fdes" name="Pdes" value="<?=$ProductoD[3];?>" required class="box">
                    </div>
                    <input type="hidden" name="Pprecio" value="<?= $ProductoD[2]; ?>">
                    <div>
                        <label for="fpre">Precio:</label>
                        <input type="text" id="fpre" name="Ppre" value="S/.<?=$ProductoD[2];?>.00" required class="box">
                    </div>
                    <?php
                    //CALCULAR SUBTOTAL
                    if(isset($_POST['CalOrden'])){
                        $Cantidad=$_POST['Scantidad'];
                        $CAN=intval($Cantidad);
                        $Precio=$_POST['PrecioC'];
                        $PRE=intval($Precio);
                        $CalcularP=($CAN*$PRE);
                        $IGV=$CalcularP*0.18;
                        $Envio=5;
                        $SubT=$CalcularP+$IGV;
                        $Tot=$SubT+5;
                    }
                    ?>
                    <input type="hidden" name="Pimp" value="<?= $CalcularP; ?>">
                    <input type="hidden" name="Pigv" value="<?= $IGV; ?>">
                    <input type="hidden" name="Penv" value="<?= $Envio; ?>">
                    <input type="hidden" name="Ptot" value="<?= $Tot; ?>">
                    <div>
                        <label for="fcan">Cantidad:</label>
                        <input type="text" id="fcan" name="Pcan" value="<?=$CAN;?>" required class="box">
                    </div>
                    <div>
                        <label for="fsub">SubTotal (Incluye IGV):</label>
                        <input type="text" id="fsub" name="Psub" value="S/.<?=$SubT;?>0" required class="box">
                    </div>
                    <div>
                        <label for="fenvio">NOTA: El delivery solo está disponible en toda Lima Metropolitana, con un cargo adicional de S/5.00</label>
                    </div>
                    <h3>Formas de entrega<h3>
                    <div>
                        <input type="text" /><img src="/Vista/img/delivery.png"/>
                    </div>
                    <input type="submit" name="OrdenNext" value="Delivery" class="btn">
                    <div>
                        <input type="text" /><img src="/Vista/img/tienda.png"/></a>
                    </div>
                    <input type="submit" name="Tienda" value="Recoger Tienda" class="btn">
                </form>
            </div>
        <?php
    }else
    {
        echo "<h4>Id no encontrado</h4>";
    }
    ?>
    </section>
</body>