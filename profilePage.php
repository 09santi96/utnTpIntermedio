<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Profile</title>
</head>
<body>
    <section>
        <h1>
            <p>Usuario:<?php echo $_SESSION['userUID'];?> </p>
            <p><a href="./sitio.php">Volver</a></p>
        </h1>
    </section>
</body>
</html>
