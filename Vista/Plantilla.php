<?php
session_start();
require('conexion.php');
if(isset($_POST['Diseño'])){
    $Plantilla = $_POST['Diseño'];
    $Mensaje=$_POST['frase'];
    if(isset($Plantilla)){
        if($Plantilla == 'plantilla1'){//PLANTILLA 1
            $consulta="insert into caja(NombrePlantilla, Mensaje, ImagenPlantilla)VALUES('Casualidad amosora', null, 'img\Plantillas\Plantilla1.png')";
            $resultado=mysqli_query($conn,$consulta);
            header('Location: OrdenCustom.php');
        }elseif($Plantilla == 'plantilla2'){//PLANTILLA 2
            $consulta="insert into caja(NombrePlantilla, Mensaje, ImagenPlantilla)VALUES('Hermosa del mundo', null, 'img\Plantillas\Plantilla13.png')";
            $resultado=mysqli_query($conn,$consulta);
            header('Location: OrdenCustom.php');
        }elseif($Plantilla == 'plantilla3'){//PLANTILLA 3
            $consulta="insert into caja(NombrePlantilla, Mensaje, ImagenPlantilla)VALUES('Te quiero (Cohete)', null,  'img\Plantillas\Plantilla3.png')";
            $resultado=mysqli_query($conn,$consulta);
            header('Location: OrdenCustom.php');
        }elseif($Plantilla == 'plantilla4'){//PLANTILLA 4
            $consulta="insert into caja(NombrePlantilla, Mensaje, ImagenPlantilla)VALUES('Te quiero (Panda)', null, 'img\Plantillas\Plantilla4.png')";
            $resultado=mysqli_query($conn,$consulta);
            header('Location: OrdenCustom.php');
        }elseif($Plantilla == 'plantilla5'){//PLANTILLA 5
            $consulta="insert into caja(NombrePlantilla, Mensaje, ImagenPlantilla)VALUES('Fecha Especial (Pinguinos)', null, 'img\Plantillas\Plantilla5.png')";
            $resultado=mysqli_query($conn,$consulta);
            header('Location: OrdenCustom.php');
        }elseif($Plantilla == 'plantilla6'){//PLANTILLA 6
            $consulta="insert into caja(NombrePlantilla, Mensaje, ImagenPlantilla)VALUES('Te Amo', null, 'img\Plantillas\Plantilla6.png')";
            $resultado=mysqli_query($conn,$consulta);
            header('Location: OrdenCustom.php');
        }elseif($Plantilla == 'plantilla7'){//PLANTILLA 7
            $consulta="insert into caja(NombrePlantilla, Mensaje, ImagenPlantilla)VALUES('Feliz Cumpleaños', null, 'img\Plantillas\Plantilla7.png')";
            $resultado=mysqli_query($conn,$consulta);
            header('Location: OrdenCustom.php');
        }elseif($Plantilla == 'plantilla8'){//PLANTILLA 8
            $consulta="insert into caja(NombrePlantilla, Mensaje, ImagenPlantilla)VALUES('Feliz Aniversario', null, 'img\Plantillas\Plantilla8.png')";
            $resultado=mysqli_query($conn,$consulta);
            header('Location: OrdenCustom.php');
        }elseif($Plantilla == 'plantilla9'){//PLANTILLA 9
            $consulta="insert into caja(NombrePlantilla, Mensaje, ImagenPlantilla)VALUES('Ser Querido Favorito', null, 'img\Plantillas\Plantilla10.png')";
            $resultado=mysqli_query($conn,$consulta);
            header('Location: OrdenCustom.php');
        }elseif($Plantilla == 'plantilla10'){//PLANTILLA 10
            $consulta="insert into caja(NombrePlantilla, Mensaje, ImagenPlantilla)VALUES('Marco para Ocasión', '$Mensaje', 'img\Plantillas\Plantilla11.png')";
            $resultado=mysqli_query($conn,$consulta);
            header('Location: OrdenCustom.php');
        }elseif($Plantilla == 'plantilla11'){//PLANTILLA 11
            $consulta="insert into caja(NombrePlantilla, Mensaje, ImagenPlantilla)VALUES('Marco de Tartas', '$Mensaje', 'img\Plantillas\plantilla-cuadrada.png')";
            $resultado=mysqli_query($conn,$consulta);
            header('Location: OrdenCustom.php');
        }elseif($Plantilla == 'plantilla12'){//PLANTILLA 12
            $consulta="insert into caja(NombrePlantilla, Mensaje, ImagenPlantilla)VALUES('Marco de Rosas', '$Mensaje', 'img\Plantillas\Plantilla_flores.png')";
            $resultado=mysqli_query($conn,$consulta);
            header('Location: OrdenCustom.php');
        }elseif($Plantilla == 'plantilla13'){//PLANTILLA 13
            $consulta="insert into caja(NombrePlantilla, Mensaje, ImagenPlantilla)VALUES('Marco de San Valentin', '$Mensaje', 'img\Plantillas\san-valentin.png')";
            $resultado=mysqli_query($conn,$consulta);
            header('Location: OrdenCustom.php');
        }elseif($Plantilla == 'plantilla14'){//PLANTILLA 14
            $consulta="insert into caja(NombrePlantilla, Mensaje, ImagenPlantilla)VALUES('Marco de Navidad', '$Mensaje', 'img\Plantillas\plantilla_navidad.png')";
            $resultado=mysqli_query($conn,$consulta);
            header('Location: OrdenCustom.php');
        }
    }elseif(empty($Plantilla)){
        include("PlantillaCaja.php");
        echo "<script>
            alert('Elige una plantilla!');
            window.location= 'PlantillaCaja.php'
        </script>";
    }
}
?>