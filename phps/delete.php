<?php
require('dbConnect.php'); 

if(isset($_GET['id_order'])){
    $id = $_GET['id_order'];
    $query = "DELETE FROM pedidos WHERE id_order = '$id';";
    $rs =  mysqli_query($conn, $query); 

    if(!$rs){
        die("No se pudo eliminar");
    }
 
    header("Location: ../verPedidos.php?error=danger");
 
}
?>  