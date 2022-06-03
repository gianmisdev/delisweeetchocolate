<?php
session_start();
require 'C:\xampp\htdocs\Vista\Admin\AdminDB.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Admin - Editar Producto</title>
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
        <?php include('MensajeP.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar Producto 
                            <a href="IndexProducto.php" class="btn btn-danger float-end">Volver</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['idProducto']))
                        {
                            $ProductoID = mysqli_real_escape_string($conn, $_GET['idProducto']);
                            $ConsultaE = "CALL pa_listar_Producto_id('$ProductoID');";
                            $ResultadoE = mysqli_query($conn, $ConsultaE);

                            if(mysqli_num_rows($ResultadoE) > 0)
                            {
                                $ProductoA = mysqli_fetch_array($ResultadoE);
                                ?>
                                <form action="ProductoCRUD.php" method="POST">
                                    <input type="hidden" name="Eid" value="<?= $ProductoA['idProducto']; ?>">

                                    <div class="mb-3">
                                        <label>Producto</label>
                                        <input type="text" name="Eproducto" value="<?=$ProductoA['NombreProducto'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Precio Unitario</label>
                                        <input type="text" name="Eprecio" value="<?=$ProductoA['PrecioUnitario'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Descripcion</label>
                                        <input type="text" name="Edescripcion" maxlength="100" value="<?=$ProductoA['Descripcion'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Imagen (Ruta)</label>
                                        <input type="text" name="Eimagen" value="<?=$ProductoA['Image'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="actualizarP" class="btn btn-primary">
                                            Actualizar Producto
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>Id no encontrado</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>