<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Agregar Usuario</title>

    <!-- estilos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/Vista/estilos/admin.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>

<body>
    
    <?php include('../header.php')?>


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


    <script src="/Vista/js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>