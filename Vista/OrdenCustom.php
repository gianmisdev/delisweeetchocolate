<?php
include('conexion.php');
$ConBrownie="";
$ResBrownie=mysqli_query($conn,$ConBrownie);
$FilaBrownie=mysqli_fetch_row($resultado);
$_SESSION['dataB'] = $FilaBrownie;

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
<body class="body-content">
    <?php include('../Vista/includes/header.php') ?>
    <?php
    $Brownie = $_SESSION['dataB'];
    if(is_array($Brownie))
    {
        ?>
            <div class="form-Brownie">
                <form action="DetalleBrownie.php" method="post">
                    <h3>Orden del Brownie Personalizado</h3>
                    <img class="imagen" src="<?=$Brownie[];?>" alt="">
                    <input type="hidden" name="Bid" style="display:none;" value="<?= $Brownie[]; ?>">
                    <div>
                        <label for="P">Producto: </label>
                        <input type="text" id="P" name="Bpro" value="Brownie de chocolate" disabled="disabled" required class="box">
                    </div>
                    <div>
                        <label for="I">Ingredientes:</label>
                        <input type="text" id="I" name="Bing" value="<?=$Brownie[];?>" disabled="disabled" required class="box">
                    </div>
                    <div>
                        <label for="P">Plantilla:</label>
                        <input type="text" id="Pla" name="Bpla" value="<?=$Brownie[];?>" disabled="disabled" required class="box">
                    </div>
                    <div>
                        <label for="P">Precio:</label>
                        <input type="hidden" name="Pimp" value="<?= $CalcularP; ?>">
                        <input type="text" id="Pre" name="pre" value="S/15.00" disabled="disabled" required class="box">
                    </div>
                    <?php
                    //CALCULAR
                        $CalcularP=15;
                        $IGV=$CalcularP*0.18;
                        $Envio=5;
                        $SubT=$CalcularP+$IGV;
                        $Tot=$SubT+5;
                    ?>
                    <div>
                        <label for="fsub">Total (Inlcuye IGV + Cargo Delivery S/5.00):</label>
                        <input type="text" id="ftot" name="tot" value="S/.<?=$Tot;?>" disabled="disabled" required class="box">
                    </div>
                    <br><h3>Datos del Delivery</h3>
                    <b><p>Complete la siguiente información, disponible en Lima Metropolitana.</p></b>
                    <div>
                        <br><label for="direccionE">Direccion</label>
                        <input type="text" id="direccionE" name="Pdir" required class="box">
                    </div>
                    <div>
                        <label for="codigoP">Codigo Postal</label>
                        <input type="number" id="codigoP" name="Pcod" required class="box">
                    </div>
                    <div>
                        <label for="referenciaE">Referencia</label>
                        <input type="text" id="referenciaE" name="Pref" required class="box">
                    </div>
                    <input type="submit" name="OrdenBrownie" value="Siguiente" class="btn"><br>
                </form>
            </div>
        <?php include('../Vista/includes/footer.php') ?>
        <?php
    }else
    {
        echo "<h4>Id no encontrado</h4>";
    }
    ?>
</body>
</html>