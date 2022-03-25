<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styleSitio.css">
    <title>Sitio</title>
</head>
<body>
<section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        
    <nav class="navSession"> 

        <img src="./assets/sesionClient.png" class="imgSession" alt="sessionlogo">
        <div class="sessionOptions">
        <?php 
            if(isset($_SESSION['userUID'])){ //name user log
                echo '<div class="containerLi">';
                    echo "<p>Bienvenido cliente: ". $_SESSION['userDNI'] . "</p>";
                    echo "<a href='phps/logout.php'>Cerrar sesion</li>";
                echo "</div>";
            }else{
                echo '<div class="containerLi">';
                    echo "<li><a href='form.php'>Registrarse</a></li>";
                    echo "<li><a href='index.php'>Iniciar sesion</a></li>";
                echo "</div>";
            }
        ?>
        </div>
       
    </nav>
    <div class="containerSitio">
        <div class="menuSitio">
            <a class="box container_button" href="./realizar_pedidos.php">
                <img src="./assets/file-document.svg" class="icons" id="icon1">
                <p class="text">Nuevo pedido</p>
            </a>
             <a class="box container_button" href="./verPedidos.php" >
                <img src="./assets/search.svg" class="icons" id="icon2">
                <p class="text">Ver pedidos</p>
            </a>
             <a class="box container_button" href="./verPedidosFin.php" >
                <img src="./assets/import.svg" class="icons" id="icon3">
                <p class="text">Ver pedidos finalizados</p>
            </a>
        </div>
    </div>
</section>
</body>
</html>