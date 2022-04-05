<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bootstrap.css">
    <link rel="stylesheet" href="./styles/styleVerPedidos.css">
    <script src="https://kit.fontawesome.com/7d49ec5fe9.js" crossorigin="anonymous"></script>
    <title>Usuarios</title>
</head>
<body>
<section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0"></div>
            <div class="square" style="--i:1"><a class="forget" href="./sitio.php">Volver</a></div>
            <div class="square" style="--i:2"></div>
            <div class="square" style="--i:3"></div>
            <div class="square" style="--i:4"></div>

    <div class="containerTable">
        
                    <?php  if(isset($_GET['error'])){  ?>
                        <?php  if($_GET['error'] == "danger"){  ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo"Pedido eliminado" ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php  }  ?>
                        <?php  if($_GET['error'] == "success"){  ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo"Pedido finalizado" ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php  }  ?>
                    <?php  }  ?>
    
            <table class="Mytable">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Dni</th>
                        <th>Contraseña</th>
                        <th>Permisos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                            include('./phps/dbConnect.php');
                            $queryUser = "SELECT * FROM usuarios;";
                            $rs_users = mysqli_query($conn, $queryUser);
                            while( $rowUsers = mysqli_fetch_array($rs_users)){ ?>
                           
                                <tr>
                                    <td><?php echo $rowUsers['usuario'] ?></td>
                                    <td><?php echo $rowUsers['email'] ?></td>
                                    <td><?php echo $rowUsers['dni'] ?></td>
                                    <td><?php echo $rowUsers['usersPwd'] ?></td>
                                    <td><?php echo $rowUsers['lvl_user'] ?></td>
                                    <td>
                                        <a class="btnAction" href="phps/edit.php?id_order=<?php echo $row['id_usuario'] ?>"><i title="Editar Usuario" class="fa-solid fa-flag-checkered"></i></a> 
                                        <a class="btnAction" href="phps/delete.php?id_order=<?php echo $row['id_usuario'] ?>"><i title="Eliminar" class="fa-solid fa-trash-can"></i></a> 
                                    </td>
                            </tr>
                        <?php } ?>
                        
                    </tbody>
            </table>
    </div>
</section>
<script src="./js/jquery-3.6.0.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="./js/bootstrap.js.map"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
</body>
</html>