<?php
include('conexion.php');

$correo = $_POST['fcorreo'];
$contraseña = $_POST['fcontraseña'];

$consulta="CALL splogin('$correo','$contraseña')";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:index.html");

}else{
    ?>
    <?php
    include("login.html");
    echo "<script>
                alert('Login no válido');
                window.location= 'login.html'
    </script>";
  ?>
  <?php
}

?>