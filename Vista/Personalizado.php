<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalizado</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Estilos -->
    <link rel="stylesheet" href="estilos/estilos.css">
</head>

<body class="body-content">
    <?php include('../Vista/includes/header.php') ?>
    <div class="form-personalizar">

        <form action="/Vista/PlantillaCaja.php" method="post">

            <h3>Personaliza tu Brownie</h3>

            <div class="img-brownie">
                <img class="basebrownie" id="baseBrownie" src="img/browniebase.png" alt="base Brownie">
                <img class="first-capa" id="Chocolate" src="img/chocolatecover.png" alt="base Brownie" style="display: none;">
                <img class="second-capa" id="Mashmellow" src="img/marshmallows.png" alt="Mashmellow" style="display: none;">
                <img class="second-capa" id="Grageas" src="img/grageas.png" alt="base Brownie" style="display: none;">
                <img class="first-capa" id="chocochip" src="img/chocochips.png" alt="base Brownie" style="display: none;">
                <img class="first-capa" id="Gomitas" src="img/gomita.png" alt="base Brownie" style="display: none;">
                <img class="first-capa" id="chispitas" src="img/chispitas.png" alt="base Brownie" style="display: none;">
            </div>

            <div class="box-container">

                <div class="chkstyle">
                    <input type="checkbox" name="checkChocolate" id="checkChocolate" onchange="javascript:mostrarcombo()" />
                    <label class="labelchk">Chocolate</label>
                </div>

                <div class="chkstyle">
                    <input class="" type="checkbox" name="checkMashmellow" id="checkMashmellow" onchange="javascript:mostrarcombo()" /><label class="labelchk">Mashmellow</label>
                </div>

                <div class="chkstyle">
                    <input type="checkbox" name="checkChispitas" id="checkChispitas" onchange="javascript:mostrarcombo()" /><label class="labelchk" style="margin-right: 1.4rem;">Chispitas</label>
                </div>

                <div class="chkstyle">
                    <input type="checkbox" name="checkchochips" id="checkchochips" onchange="javascript:mostrarcombo()" /><label class="labelchk" style="margin-left: 0.9rem;">Chispas de chocolate</label>
                </div>

                <div class="chkstyle">
                    <input type="checkbox" name="checkGrageas" id="checkGrageas" onchange="javascript:mostrarcombo()" /><label class="labelchk" style="margin-right: 2rem;">Grageas</label>
                </div>

                <div class="chkstyle">
                    <input type="checkbox" name="checkGomitas" id="checkGomitas" onchange="javascript:mostrarcombo()" /><label class="labelchk" style="margin-right: 3.5rem;">Gomitas</label><br>
                </div>
            </div>
            <input type="submit" name="brownie" value="Siguiente" class="btn">
        </form>
    </div>


    <?php include('../Vista/includes/footer.php') ?>

    <script src="js/script.js"></script>
</body>

</html>