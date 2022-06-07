<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recoger en Tienda</title>
    <!--ESTILOS-->
    <link rel="stylesheet" href="estilos/estilos.css">
</head>

<body>
    <?php include('../Vista/includes/header.php') ?>
    <div class="form-Tienda">
        <form action="#" method="post">
            <a href="index.php"><img src="img/logo.png" alt=""></a>
            <h3>¡Gracias por elegirnos!</h3>
            <div>
                <p>Su pedido ha sido un éxito y está siendo procesado, la preparación de su entrega puede tomar hasta 2 días hábiles.</p>
                <p>Si desea visitarnos y conocer más de nuestros productos puede ir a nuestra tienda local.</p><br>
                <p>Horario: Desde las 07:00am hasta las 10:00pm</p>
                <p>Direccion: Av. El Sol 2-196, Villa María del Tiunfo</p>
                <p>Referencia: Altura de la estación Villa María, cerca del colegio Santa María.</p><br>
            </div>
            <a href="https://maps.google.com/maps?q=-12.1683381%2C-76.9500709&z=17&hl=es" target="_blank" class="option-btn" name="verP">Tienda Local</a>
        </form>
    </div>


    <?php include('../Vista/includes/footer.php') ?>
</body>
</html>