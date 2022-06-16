<?php
session_start();
include('conexion.php');

//VALIDAR CORREO
$correo = $_POST['fcorreo'];
$contraseña = $_POST['fcontraseña'];
$consulta="CALL splogin('$correo','$contraseña')";
$resultado=mysqli_query($conn,$consulta);
$filas=mysqli_fetch_row($resultado);
$_SESSION['dataU'] = $filas;

mysqli_close($conn);

if($filas){
  if($_SESSION['dataU'][1] != 0){
    header("location:/Vista/Admin/IndexAdmin.php");
  }else{
    header("location:index.php");
  }
}else{
    ?>
    <?php
    include("login.html");
    echo "<script>
                alert('Login no válido');
                window.location= 'login.php'
    </script>";
  ?>
  <?php
}
?>