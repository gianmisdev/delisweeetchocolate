<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Estilos -->
    <link rel="stylesheet" href="estilos/estilos.css">
</head>

<body class="body-content">
    <?php include('../Vista/includes/header.php') ?>
    <div class="form-Pago">
        <form action="/Vista/Pedido.php" method="post">
            <h3>Escanea uno de los siguientes códigos QR.</h3>
            <h1>Por temas de seguridad, recomendamos de no realizar el escaneo mediante terceros no registrados, solo el usuario actual puede proseguir con el pago.</h1><br>
            <br><img class="imagen" src="img/YapeQR.png" alt=""><br>
            <br><img class="imagen" src="img/PlinQR.png" alt=""><br>
            <input type="submit" name="Pedido" value="Siguiente" class="btn">
        </form>
    </div>
    <?php include('../Vista/includes/footer.php') ?>
</body>

</html>