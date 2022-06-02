<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- estilos -->
    <link rel="stylesheet" href="estilos/estilos.css">
</head>

<body>

    <?php include('header.php') ?>

    <div class="container">

        <h3>Elige un diseño para tu caja</h3>
        <div class="wrapper">
            <div class="image" id="plantilla1">
                <img src="img/brownies.jpg" alt="">
            </div>
            <div class="image" id="plantilla2">
                <img src="img/brownie_genérico.jpg" alt="">
            </div>
            <div class="image" id="seleccionar">
                <p class="text">No haz elegido una plantilla</p>
            </div>
        </div>
        <select id="name" style="width: 90%;">
            <option value="seleccionar">Selecciona tu diseño</option>
            <option value="plantilla1">Plantilla 1</option>
            <option value="plantilla2">Plantilla 2</option>
        </select>

        <input type="button" name="Regresar" value="Atras" class="btn" onclick="history.go(-1);">
        <input type="submit" name="registrar" value="Siguiente" class="btn">

    </div>


    <?php include('footer.php') ?>

    <script src="js/script.js"></script>

    <!-- elegir opciones de plantilla -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#name").on('change', function(){
                $(".image").hide();
                $("#" + $(this).val()).fadeIn(700);
            }).change();
        })
    </script>
</body>

</html>