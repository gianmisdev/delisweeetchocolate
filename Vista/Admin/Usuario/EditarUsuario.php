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

    <title>Admin - Editar Usuario</title>
</head>

<body>
    
    <?php include('../header.php')?>


    <div class="container mt-5">
        <?php include('MensajeU.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar Usuario 
                            <a href="IndexUsuario.php" class="btn btn-danger float-end">Volver</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['idUsuario']))
                        {
                            $UsuarioID = mysqli_real_escape_string($conn, $_GET['idUsuario']);
                            $ConsultaE = "CALL pa_listar_Usuario_id('$UsuarioID');";
                            $ResultadoE = mysqli_query($conn, $ConsultaE);

                            if(mysqli_num_rows($ResultadoE) > 0)
                            {
                                $UsuarioA = mysqli_fetch_array($ResultadoE);
                                ?>
                                <form action="UsuarioCRUD.php" method="POST">
                                    <input type="hidden" name="Aid" value="<?= $UsuarioA['idUsuario']; ?>">

                                    <div class="mb-3">
                                        <label>Nombre</label>
                                        <input type="text" name="Enombre" value="<?=$UsuarioA['nombre'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Apellido</label>
                                        <input type="text" name="Eapellido" value="<?=$UsuarioA['apellido'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Contraseña</label>
                                        <input type="text" name="Econtraseña" value="<?=$UsuarioA['Contraseña'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DNI</label>
                                        <input type="text" name="Edni" value="<?=$UsuarioA['dni'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Correo</label>
                                        <input type="email" name="Ecorreo" value="<?=$UsuarioA['correo'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="actualizarU" class="btn btn-primary">
                                            Actualizar Usuario
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

    <!-- script header -->
    <script src="/Vista/js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>