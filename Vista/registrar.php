<?php
include('conexion.php');

//
if (isset($_POST['registrar'])) {
    $nombre = $_POST['fnom'];
    $apellido = $_POST['fape'];
    $dni = $_POST['fdni'];
    $correo = $_POST['fcorreo'];
    $contraseña = $_POST['fcontraseña'];
    $query = "
    SELECT IF( EXISTS(
      SELECT * FROM usuario
      WHERE correo = '$correo'), 'Existe', 'No existe') as Resultado;
    CALL pa_agregar_Usuario('','$nombre', '$apellido', '$contraseña', '$dni', '$correo');
    END";
      
    $result = mysqli_query($conn, $query);

    header('Location: login.html');

}else{
  ?>
    <?php
    include("registrarse.html");
    echo "<script>
                alert('El correo o DNI ya existen!');
                window.location= 'registrarse.html'
    </script>";
}

?>