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

    <title>Admin. Producto</title>
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
    <div class="container mt-4">
        <?php include('MensajeP.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Productos Almacenados
                            <a href="CrearProducto.php" class="btn btn-primary float-end">Agregar Producto</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Descripcion</th>
                                    <th>Imagen</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $consulta = "CALL pa_listar_producto;";
                                    $resultado = mysqli_query($conn, $consulta);

                                    if(mysqli_num_rows($resultado) > 0)
                                    {
                                        foreach($resultado as $producto)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $producto['idProducto']; ?></td>
                                                <td><?= $producto['NombreProducto']; ?></td>
                                                <td><?= $producto['PrecioUnitario']; ?></td>
                                                <td><?= $producto['Descripcion']; ?></td>
                                                <td><?= $producto['Image']; ?></td>
                                                <td>
                                                    <a href="EditarProducto.php?idProducto=<?= $producto['idProducto']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                    <form action="ProductoCRUD.php" method="POST" class="d-inline">
                                                        <button type="submit" name="EliminarProducto" value="<?=$producto['idProducto'];?>" class="btn btn-danger btn-sm">Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> Registro no encontrado </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>