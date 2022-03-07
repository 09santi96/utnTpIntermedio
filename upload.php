<?php
    $archivo = $_FILES['archivo1']; //var save file
    var_dump($archivo);
    $nameFile = $archivo['name'];
    $typeFile = $archivo['type'];


        if($typeFile == "text/plain" || $typeFile == "/xls" || $typeFile == "/xlsx"  || $typeFile == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" || $typeFile == "application/vnd.ms-excel"){
            echo "Formato de archivo correcto";
        

        }else{
            header("Refresh: 500; URL=index.php");// redirecciona a index despues de 500 seg
            echo "Formato de archivo incorrecto";
        }
    die();  
?>