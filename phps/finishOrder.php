<?php
require('dbConnect.php'); 

if(isset($_GET['id_order'])){
    $id = $_GET['id_order'];
    $query = "UPDATE pedidos SET estado_pedido = 'Finalizado' WHERE id_order = '$id';";
    $rs =  mysqli_query($conn, $query); 

    if(!$rs){
        die("No se pudo finalizar pedido");
    }
 
    header("Location: ../verPedidos.php?error=success");
    
}

