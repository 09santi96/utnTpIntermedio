<?php
require('dbConnect.php'); 

if(isset($_GET['id_order'])){
    $id = $_GET['id_order'];
    $query = "SELECT * FROM pedidos WHERE id_order = '$id';";
    $rs =  mysqli_query($conn, $query); 


    if(mysqli_num_rows($rs) == 1){
        $row = mysqli_fetch_array($rs);
        $status = $row['estado_pedido'];
        $description = $row['descripcion'];
    }
}

if(isset($_POST['update'])){
    $id = $_GET['id_order'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query2 = "UPDATE pedidos SET titulo = '$title', descripcion = '$description' WHERE id = '$id';";
    mysqli_query($conn, $query2); 

    $_SESSION['message'] = 'Tarea actualizada';
    $_SESSION['message_type'] = 'primary';
    header("Location: ../index.php");

}


?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/bootstrap.css">
    <script src="https://kit.fontawesome.com/7d49ec5fe9.js" crossorigin="anonymous"></script>
    <title>Edit</title>
</head>
<body>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Update Title" name="title" value="<?php echo $title ?>">
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Update description"><?php echo $description ?></textarea>
                    </div>
                    <button class="btn btn-success" name="update">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>