<!-- Header -->
<header class="header">
    <div class="header-1">
        <div class="flex">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-whatsapp"></a>
            </div>
            <!-- <p> Nuevo <a href="/Vista/login.php">Login</a> | <a href="/Vista/registrarse.html">Registro</a> </p> -->
        </div>
    </div>

    <div class="header-2">
        <div class="flex">
            <div class="logo">
                <a href="/Vista/index.php"><img src="/Vista/img/logo.png"></a>
            </div>
            <!--BURGER NAVBAR INICIO-->
            <nav class="navbar">
                <a href="\Vista\Index.php">Catalogo</a>
                <a href="#">Promociones</a>
                <a href="#">Contacto</a>
                <a href="#">Nosotros</a>
                <a href="https://maps.google.com/maps?q=-12.1683381%2C-76.9500709&z=17&hl=es" target="_blank">Visitar Tienda</a>
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
