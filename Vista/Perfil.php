<?php
session_start();
include('conexion.php');
if(empty($_SESSION['dataU'])){
    header("location:login.php");
}elseif(isset($_SESSION['dataU'])){
    $sesion=$_SESSION['dataU'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delisweetchocolate - Inicio</title>   
    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!--ESTILOS-->
    <link rel="stylesheet" href="estilos/estilos.css">
</head>

<body class="body-content">
    <?php include('../Vista/includes/header.php') ?>
    <!--FORM MOSTRAR Y ACTUALIZAR PERFIL-->
    <?php
    $UsuarioA = $_SESSION['dataU'];
    $UsuarioID = $UsuarioA[0];
    $ConsultaE = "CALL pa_listar_Usuario_id('$UsuarioID');";
    $ResultadoE = mysqli_query($conn, $ConsultaE);
    $FilaU=mysqli_fetch_row($ResultadoE);
    $_SESSION['dataAU'] = $FilaU;
        if(is_array($FilaU))
        {
            ?>
            <div class="form-container">
                <form action="ActualizarPerfil.php" method="post">
                    <a href="/Vista/Index.php"><img src="img/logo.png" alt=""></a>
                    <h3>Perfil de Usuario</h3>
                    <input type="hidden" name="Aid" value="<?= $FilaU[0]; ?>">
                    <div>
                        <label for="fnom">Nombres</label>
                        <input type="text" id="fnom" name="Anombre" value="<?=$FilaU[2];?>" required class="box">
                    </div>
                    <div>
                        <label for="fape">Apellidos</label>
                        <input type="text" id="fape" name="Aapellido" value="<?=$FilaU[3];?>" required class="box">
                    </div>
                    <div>
                        <label for="fcel">DNI</label>
                        <input type="number" id="fdni" name="Adni" value="<?=$FilaU[5];?>" required class="box">
                    </div>
                    <div>
                        <label for="fcorreo">Correo</label>
                        <input type="email" id="fcorreo" name="Acorreo" value="<?=$FilaU[6];?>" required class="box">
                    </div>
                    <div>
                        <label for="fcontraseña">Contraseña</label>
                        <input type="text" id="fcontraseña" name="Acontraseña" value="<?=$FilaU[4];?>" required class="box">
                    </div>
                    <input type="submit" name="ActPer" value="Actualizar Datos" class="btn">
                    <?php
                    if($FilaU[1] == 1){
                        ?><br><a href="/Vista/Admin/IndexAdmin.php" class="option-btn">Administrar Pagina</a><?php
                    }
                    ?>
                </form>
            </div>
            <?php
        }else
        {
            echo "<h4>Id no encontrado</h4>";
        }
    ?>
    
    <?php include('../Vista/includes/footer.php') ?>

    <script src="js/script.js"></script>
</body>
</html>