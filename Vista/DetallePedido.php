<?php
include('conexion.php');
//INSERTAR FILA DETALLE_PRODUCTO Y CARGAR DELIVERY
if (isset($_POST['OrdenNext'])) {
    $IDproducto = $_POST['Pid'];
    $Precio = $_POST['Pprecio'];
    $Cantidad = $_POST['Pcan'];
    $Importe = $_POST['Pimp'];
    $Envio = $_POST['Penv'];
    $Total = $_POST['Ptot'];
    $query = "insert into detalle_pedido(idProducto, PrecioUnitario, Cantidad, Importe, PrecioEnvio, SubTotal)values('$IDproducto', '$Precio', '$Cantidad', '$Importe', '$Envio', '$Total');";
    $result = mysqli_query($conn, $query);

    header('Location: Delivery.html');

}else{
    //CARGAR INFO RECOJO EN TIENDA
    if (isset($_POST['Tienda'])) { 
        header('Location: RecogerT.html');
    }
}
?>