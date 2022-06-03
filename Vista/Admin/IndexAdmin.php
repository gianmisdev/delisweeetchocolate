<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../estilos/admin.css">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <title>Administración</title>
</head>

<body>
    <!-- header -->
    <header class="header">
        <div class="header-2">
            <div class="flex">
                <div class="logo">
                    <a href="IndexAdmin.php"><img src="\Vista\img\logo.png"></a>
                </div>
                <p>Administración de MAIOT</p>
                <!--BURGER NAVBAR INICIO-->
                <nav class="navbar">
                    <a href="/Vista/Admin/IndexAdmin.php">Inicio</a>
                    <a href="/Vista/Admin/Usuario/IndexUsuario.php">Usuario</a>
                    <a href="/Vista/Admin/Producto/IndexProducto.php">Producto</a>
                    <a href="#">Pedido</a>
                </nav>
                <div class="icons">
                    <div id="menu-btn" class="fas fa-bars"></div>                   
                </div>
                <a href="Logout.php" class="delete-btn">Cerrar sesión</a>
                
                <!--BURGER NAVBAR FIN-->
            </div>
        </div>
    </header>

   
    

    <script src="../js/script.js"></script>
</body>

</html>