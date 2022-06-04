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
    <!-- estilos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/Vista/estilos/admin.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Admin. Pedido</title>
</head>

<body>
    
    <?php include('../header.php')?>


    <div class="container mt-4">
        <?php include('MensajePro.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Pedidos Generados</h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>DNI</th>
                                    <th>Producto</th>
                                    <th>Precio Unitario</th>
                                    <th>Dirección de Envío</th>
                                    <th>Código Postal</th>
                                    <th>Referencia</th>
                                    <th>Fecha Creada</th>
                                    <th>Fecha de Entrega</th>
                                    <th>Estado de Pago</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $consulta = "CALL pa_listar_pedido_orden();;";
                                    $resultado = mysqli_query($conn, $consulta);

                                    if(mysqli_num_rows($resultado) > 0)
                                    {
                                        foreach($resultado as $pedido)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $pedido['nombre']; ?></td>
                                                <td><?= $pedido['apellido']; ?></td>
                                                <td><?= $pedido['dni']; ?></td>
                                                <td><?= $pedido['NombreProducto']; ?></td>
                                                <td><?= $pedido['PrecioUnitario']; ?></td>
                                                <td><?= $pedido['DireccionEnvio']; ?></td>
                                                <td><?= $pedido['CodigoPostal']; ?></td>
                                                <td><?= $pedido['Referencia']; ?></td>
                                                <td><?= $pedido['FechaCreacion']; ?></td>
                                                <td><?= $pedido['FechaEntrega']; ?></td>
                                                <td><?= $pedido['Estado']; ?></td>
                                                <td><?= $pedido['Cantidad']; ?></td>
                                                <td><?= $pedido['Subtotal']; ?></td>
                                                <td>
                                                    <a href="EditarPedido.php?idPedido=<?= $pedido['idPedido']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                    <form action="PedidoCRUD.php" method="POST" class="d-inline">
                                                        <button type="submit" name="EliminarPedido" value="<?=$pedido['idPedido'];?>" class="btn btn-danger btn-sm">Eliminar</button>
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



    <!-- script header -->
    <script src="/Vista/js/script.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>