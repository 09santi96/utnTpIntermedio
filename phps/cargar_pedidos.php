<?php


        if(isset($_POST['submit'])){
            $titulo = $_POST['title'];
            $desc = $_POST['desc'];
            $date = $_POST['dateT'];
            $files = $_POST['fileOrder'];
     
            

            require_once'./dbConnect.php';
            require_once'./functions_inc.php';
            
            if(createOrder($conn, $titulo, $desc, $date, $files) !== false ){
                header("Location:realizar_pedidos.php?error=createOrderFail2");
                exit();
            }
            if(createOrder($conn, $titulo, $desc, $date, $files) !== true ){
                header("Location:realizar_pedidos.php?error=none");
                exit();
            }
            
            else{
                header("Location:form.php?error=invalidPassReg");
                exit();
            }

            

            
        }

/*-------------------------tratamiento de archivos--------------------*/

if (isset($_POST['submit'])) {
    $file = $_FILES['fileOrder'];
 
    $fileName = $_FILES['fileOrder']['name'];
    $fileTmpName = $_FILES['fileOrder']['tmp_name'];
    $fileSize = $_FILES['fileOrder']['size'];
    $fileError = $_FILES['fileOrder']['error'];
    $fileType = $_FILES['fileOrder']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $notAllowed = array('jpg', 'jpeg', 'png', 'pdf', 'php', 'sql');
    $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'php', 'sql');

    
     if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if ($fileSize < 500000) { //kb
                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                    $fileDestination = 'uploads/' . $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
            }else{
                echo "Your file is to big";
            }
        }else{
            echo"There was an error  uploading your file!";
        }
     }else{
        echo"You cannot upload files of this type!";
     }

} 

        
?>