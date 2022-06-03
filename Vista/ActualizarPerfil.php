<?php
session_start();
include('conexion.php');

//
if (isset($_POST['ActPer'])) {
    $nombre = $_POST['Anombre'];
    $apellido = $_POST['Aapellido'];
    $dni = $_POST['Adni'];
    $correo = $_POST['Acorreo'];
    $contraseña = $_POST['Acontraseña'];
    $IDusuario = $_POST['Aid'];
    $query = "CALL pa_actualizar_Usuario('$IDusuario', '','$nombre', '$apellido', '$contraseña', '$dni', '$correo')";
      
    $result = mysqli_query($conn, $query);

    header('Location: Perfil.php');

}else{
  ?>
    <?php
    include("Perfil.php");
    echo "<script>
                alert('Error al actualizar!');
                window.location= 'Perfil.php'
    </script>";
}

?>