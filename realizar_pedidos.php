<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bootstrap.css">
    <link rel="stylesheet" href="./styles/stylePedidos.css">
   
    <title>Realizar pedido</title>
</head>
<body>

<section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0"></div>
            <div class="square" style="--i:1"></div>
            <div class="square" style="--i:2"></div>
            <div class="square" style="--i:3"></div>
            <div class="square" style="--i:4"></div>
           
          
            <div class="container">
                <div class="form">

                    <h2>Realizar pedido</h2>
                    <?php  if(isset($_GET['error'])){  ?>
                        <?php  if($_GET['error'] == "success"){  ?>
                                <div class="alert alert-<?php echo $_GET['error']?> alert-dismissible fade show" role="alert">
                                <?php echo"Pedido realizado" ?>
                              
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php  }  ?>
                        <?php  if($_GET['error'] == "danger"){  ?>
                                <div class="alert alert-<?php echo $_GET['error']?> alert-dismissible fade show" role="alert">
                                <?php echo"Error al crear el pedido" ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php  }  ?>
                    <?php  }  ?>
                    <form action="./phps/cargar_pedidos.php" method="POST" enctype="multipart/form-data">
                        <div class="inputBox">
                            <input type="text" placeholder="Titulo" name="title" required autofocus>
                        </div>
                        <div class="inputBox">
                            <input type="text" placeholder="descripcion" name="desc" required>
                        </div>
                        <div class="inputBox">
                            <input type="datetime-local" name="dateT" required>
                        </div>
                        <div class="inputBox">
                          <input type="file" name="file" required>
                        </div>
                        <div class="inputBox2">
                            <button class="btn" type="button" onclick="window.location.href='./sitio.php'">Volver</button> 
                            <button class="btn" type="submit" name="submit">Enviar</button>
                            <button class="btn" type="reset" name="reset" value="Limpiar">Limpiar</button>   
                        </div>

                    </form>
                </div>
            </div>
        </div>
            
    </section>


<script src="./js/bootstrap.js"></script>
</body>
</html>