<?php
session_start();
include('conexion.php');
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

<body>
    <!-- Header -->
    <header class="header">
        <div class="header-1">
            <div class="flex">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-whatsapp"></a>
                </div>
                <p><a href="login.php">Cerrar Sesion</a>
            </div>
        </div>
        <div class="header-2">
            <div class="flex">
                <div class="logo">
                    <a href="\Vista\Index.php"><img src="img/logo.png"></a>
                </div>
            <!--BURGER NAVBAR INICIO-->
                <nav class="navbar">
                    <a href="\Vista\Index.php">Catalogo</a>
                    <a href="#">Promociones</a>
                    <a href="#">Contacto</a>
                    <a href="#">Nosotros</a>
                </nav>
                <div class="icons">
                    <div id="menu-btn" class="fas fa-bars"></div>
                    <div class="user">
                        <a href="\Vista\Perfil.php"><img src="/Vista/img/usuario.png"></a>
                    </div>                   
                </div>         
            </div>        
        </div>
    </header>
    <!--FORM MOSTRAR Y ACTUALIZAR PERFIL-->
    <?php
    $UsuarioA = $_SESSION['dataU'];
        if(is_array($UsuarioA))
        {
            ?>
            <div class="form-container">
                <form action="ActualizarPerfil.php" method="post">
                    <a href="/Vista/Index.php"><img src="img/logo.png" alt=""></a>
                    <h3>Perfil de Usuario</h3>
                    <input type="hidden" name="Aid" value="<?= $UsuarioA[0]; ?>">
                    <div>
                        <label for="fnom">Nombres</label>
                        <input type="text" id="fnom" name="Anombre" value="<?=$UsuarioA[2];?>" required class="box">
                    </div>
                    <div>
                        <label for="fape">Apellidos</label>
                        <input type="text" id="fape" name="Aapellido" value="<?=$UsuarioA[3];?>" required class="box">
                    </div>
                    <div>
                        <label for="fcel">DNI</label>
                        <input type="number" id="fdni" name="Adni" value="<?=$UsuarioA[5];?>" required class="box">
                    </div>
                    <div>
                        <label for="fcorreo">Correo</label>
                        <input type="email" id="fcorreo" name="Acorreo" value="<?=$UsuarioA[6];?>" required class="box">
                    </div>
                    <div>
                        <label for="fcontraseña">Contraseña</label>
                        <input type="text" id="fcontraseña" name="Acontraseña" value="<?=$UsuarioA[4];?>" required class="box">
                    </div>
                    <input type="submit" name="ActPer" value="Actualizar Datos" class="btn">
                </form>
            </div>
            <?php
        }else
        {
            echo "<h4>Id no encontrado</h4>";
        }
    ?>
    
    <!-- Secciones Promociones -->
    <section class="promociones">
        <h3>Promociones</h3>
        <div class="content">
            <div class="box">
                <h2>Delivery</h2>
                <a><img src="img/delivery.png" alt=""></a>
            </div>
            <div class="box">
                <h2>Yape</h2>
                <a><img src="img/yape.png" alt=""></a>
            </div>
            <div class="box">
                <h2>Plin</h2>
                <a><img src="img/plin.png" alt=""></a>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <div class="logo">
                    <a href="#"><img src="img/logo.png"></a>
                </div>
                <p>
                Misión
                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                 tempor incididunt ut labore et dolore magna aliqua”.
                </p>
            </div>
            <div class="box">
                <p><a href="#">INICIO</a></p>
                <p><a href="#">PRODUCTOS</a></p>
                <p><a href="#">PROMOCIONES</a></p>
                <p><a href="#">CONTACTO</a></p>
            </div>
            <div class="box">
                <h2>Redes sociales</h2>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook </a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram </a>
                <a href="#"><i class="fab fa-whatsapp"></i> Whatsapp </a>
            </div>
        </div>
    </section>
        
    <p class="credit"> &copy; <b>Delisweetchocolate</b> - 2022 Todos los Derechos Reservados</p>
    

    <script src="js/script.js"></script>
</body>
</html>