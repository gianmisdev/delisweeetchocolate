<?php
session_start();
if(isset($_SESSION['dataU'])){
    $sesion=$_SESSION['dataU'];
}else{
    unset($_SESSION['dataU']);
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

<body>
    <!-- Header -->
    <header class="header">
        <div class="header-1">
            <div class="flex">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-whatsapp"></a>
                </div><?php
                echo $cs = (isset($sesion)) ? "<p><a href='login.php'>Cerrar Sesion</a>": "";?>
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
                        <a href="<?php echo $cs = (isset($sesion)) ? "/Vista/Perfil.php": "/Vista/login.php"; ?>"><img src="/Vista/img/usuario.png"></a>
                    </div>                   
                </div>
            <!--BURGER NAVBAR FIN-->           
            </div>        
        </div>
    </header>
    
    <!-- Seccion Personalizar -->
    <section class="home">
        <div class="hero">
            <h3>Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quod? Reiciendis ut porro iste totam.</p>
            <a href="/Vista/Personalizado.php" class="white-btn">Personalizar</a>           
        </div>   
    </section>
    
    <!-- Seccion Catalogo -->
    <section class="catalogo">
        <h1 class="titulo">Catalogo</h1>
        <div class="box-container">
            <?php
                foreach($_SESSION['data'] as $fila) { ?>
                    <div class="box">
                        <img class="imagen" src="<?php echo $fila['Image']; ?>" alt="">
                        <div class="nombre"><?php echo $fila['NombreProducto']; ?>
                        </div>
                        <div class="precio">S/.<?php echo $fila['PrecioUnitario']; ?>.00</div>
                        <a href="DescripcionP.php?idProducto=<?php echo $fila['idProducto']?>" class="option-btn" name="verP">Ver</a>
                    </div>
                <?php
                }
            ?>
        </div>
        
    </section>
    
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