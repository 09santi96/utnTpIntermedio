<?php
    $serverName = "localhost";
    $dBUserName = "root";
    $dBPasswoord = "";
    $dBName = "usuariostpfinal";

    $conn = mysqli_connect($serverName, $dBUserName, $dBPasswoord, $dBName);
    if(!$conn){
        die("Conexion fallida: " . mysqli_connect_error());
    }

?>