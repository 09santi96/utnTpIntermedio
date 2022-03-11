<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bootstrap.css">
    <link rel="stylesheet" href="./styles/styleVerPedidos.css">
    <script src="https://kit.fontawesome.com/7d49ec5fe9.js" crossorigin="anonymous"></script>
    <title>Ver pedidos</title>
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
        
            
    
            <table class="Mytable">
                <thead>
                    <tr>
                        <th>Estado</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                            include('./phps/dbConnect.php');
                            $query = "SELECT * FROM pedidos;";
                            $rs_task = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($rs_task)){ ?>
                                <tr>
                                    <td><?php if($row['estado_pedido'] == "Procesando") echo $row['estado_pedido']; ?></td>
                                    <td><?php echo $row['titulo'] ?></td>
                                    <td><?php echo $row['descripcion'] ?></td>
                                    <td><?php echo $row['fecha'] ?></td>
                                    <td>
                                        <a class="btnAction" a href="phps/edit.php?id=<?php echo $row['id_order'] ?>"><i title="Ver pedido" class="fa-solid fa-eye"></i></a>
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