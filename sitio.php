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

        <img src="./img/sesionClient.png" class="imgSession" alt="sessionlogo">
        <div class="sessionOptions">
        <?php 
            if(isset($_SESSION['userUID'])){ //name user log
                echo "<li><a href='profilePage.php'>Perfil</a></li>";
                echo "<li><a href='phps/logout.php'>Cerrar sesion</a></li>";
            }else{
                echo "<li><a href='form.php'>Registrarse</a></li>";
                echo "<li><a href='index.php'>Iniciar sesion</a></li>";
            }
        ?>
        </div>
       
    </nav>
    <div class="containerSitio">
            <p>Sube tu archivo!</p>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div>
                    <div class="formfield">
                        <input name="archivo1" type="file" required />
                    </div>

                    <div class="formbutton">
                        <button class="btn" type="submit">Subir</button>
                    </div>
                </div>
            </form>
    </div>
</section>
</body>
</html>