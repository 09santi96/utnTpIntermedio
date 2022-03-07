<?php
  if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    require_once'./phps/dbConnect.php';
    require_once'./phps/functions_inc.php';

        if(emptyInputLogin($user, $pass) !== false ){
            header("Location:index.php?error=emptyInput");
            exit();
        }

        loginUser($conn, $user, $pass)  ;
    }else{
        header("Location: ../index.php");
        exit();
    }
  
?>