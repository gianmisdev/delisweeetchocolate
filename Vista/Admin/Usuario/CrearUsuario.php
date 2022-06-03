<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Admin - Agregar Usuario</title>
</head>
<body style="background-color:#f7ecd9;">
<body>
    <div class="container-fluid">
        <!-- BARRA NAVEGACIÓN -->
        <div class="bg-warning">
            <nav class="navbar navbar-brand mb-0 h1 navbar-expand-md border-2 border-bottom border-primary">
                <div class="container-fluid">
                <a class="navbar-brand" href="/Vista/Admin/IndexAdmin.php">
                    <img src="\Vista\img\logo.png" alt="MAIOT" width="50" height="42" class="d-inline-block align-text-middle">
                    Administración de MAIOT
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion" aria-expanded="true">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>
                <div id="MenuNavegacion" class="navbar-collapse collapse show" style="">
                    <ul class="navbar-nav ms-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="/Vista/Admin/Usuario/IndexUsuario.php">Usuario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Vista/Admin/Producto/IndexProducto.php">Producto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pedido</a>
                        </li>
                        
                    </ul>
                    <ul class="navbar-nav ms-3">
                        <li class="nav-item">
                            <a class="nav-link text-nowrap" href="http://localhost/Vista/login.php">Cerrar Sesion</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="container mt-5">
        <?php include('MensajeU.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Agregar Usuario 
                            <a href="IndexUsuario.php" class="btn btn-danger float-end">Volver</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="UsuarioCRUD.php" method="POST">

                            <div class="mb-3">
                                <label>Nombre</label>
                                <input type="text" name="Anombre" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Apellido</label>
                                <input type="text" name="Aapellido" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>DNI</label>
                                <input type="text" name="Adni" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Correo</label>
                                <input type="email" name="Acorreo" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Contraseña</label>
                                <input type="text" name="Acontraseña" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="AgregarU" class="btn btn-primary">Guardar Usuario</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>