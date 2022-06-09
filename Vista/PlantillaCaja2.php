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

<body class="body-content">

    <?php include('../Vista/includes/header.php') ?>

    <div class="container">

        <form action="/Vista/PlantillaCaja.php" method="post">
            <h3>Elige un diseño para tu caja</h3>
            <div class="wrapper">
                <!-- <div class="image" id="seleccionar">
                    <p class="text">No haz elegido una plantilla</p>
                </div> -->
                <div class="image" id="plantilla1">
                    <img src="img/Plantillas/Plantilla1.png" alt="">
                </div>
                <div class="image" id="plantilla2">
                    <img src="img/Plantillas/Plantilla2.png" alt="">
                </div>
                <div class="image" id="plantilla3">
                    <img src="img/Plantillas/Plantilla3.png" alt="">
                </div>
                <div class="image" id="plantilla4">
                    <img src="img/Plantillas/Plantilla4.png" alt="">
                </div>
                <div class="image" id="plantilla5">
                    <img src="img/Plantillas/Plantilla5.png" alt="">
                </div>
                <div class="image" id="plantilla6">
                    <img src="img/Plantillas/Plantilla11.png" alt="">
                </div>
                <div class="image" id="plantilla7">
                    <img src="img/Plantillas/Plantilla7.png" alt="">
                </div>
                <div class="image" id="plantilla8">
                    <img src="img/Plantillas/Plantilla8.png" alt="">
                </div>
                <div class="image" id="plantilla9">
                    <img src="img/Plantillas/Plantilla9.png" alt="">
                </div>
                <div class="image" id="plantilla10">
                    <img src="img/Plantillas/Plantilla10.png" alt="">
                </div>

                <div class="frase" id="contenido"></div>
            </div>
            <select id="name" style="width: 90%;">
                <!-- <option value="seleccionar">Selecciona tu diseño</option> -->
                <option value="plantilla1">Plantilla 1</option>
                <option value="plantilla2">Plantilla 2</option>
                <option value="plantilla3">Plantilla 3</option>
                <option value="plantilla4">Plantilla 4</option>
                <option value="plantilla5">Plantilla 5</option>
                <option value="plantilla6">Plantilla 6</option>
                <option value="plantilla7">Plantilla 7</option>
                <option value="plantilla8">Plantilla 8</option>
                <option value="plantilla9">Plantilla 9</option>
                <option value="plantilla10">Plantilla 10</option>
            </select>

            <div class="mensaje">
                <label for="fnom">Escribe un mensaje</label>
                <textarea id="entrada" name="frase" onkeyup="escribir2()" class="box" placeholder="Ejemplo: Feliz cumpleaños!"></textarea>
            </div>

            <input type="button" name="Regresar" value="Atras" class="btn">
            <input type="submit" name="registrar" value="Siguiente" class="btn">
        </form>
    </div>


    <?php include('../Vista/includes/footer.php') ?>

    <script src="js/script.js"></script>

    <!-- elegir opciones de plantilla -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#name").on('change', function() {
                $(".image").hide();
                $("#" + $(this).val()).fadeIn(700);
            }).change();
        })
    </script>

    <!-- Escribir frase -->
    <script>
        function escribir2() {
            valor = document.getElementById('entrada').value;
            document.getElementById('contenido').innerHTML = ' ' + valor;
        }
    </script>

</body>

</html>