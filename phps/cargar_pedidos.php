<?php


    if(isset($_POST['submit'])){ 
        $titulo = $_POST['title'];
        $desc = $_POST['desc'];
        $date = $_POST['dateT'];
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];

        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

    
        require_once'./dbConnect.php';
        require_once'./functions_inc.php';
    
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
    
        $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'php', 'sql');
    
         if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if ($fileSize < 500000) { //kb
                        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = '../uploads/' . $fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        header("Location: index.php?uploadsuccess");
                }else{
                    echo "Your file is to big";
                }
            }else{
                echo"There was an error  uploading your file!";
            }
         }else{
            echo"You cannot upload files of this type!";
         }
    
        createOrder($conn, $titulo, $desc, $date, $fileNameNew);
           
       
 
    }


        
?>