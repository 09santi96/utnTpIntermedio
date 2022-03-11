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
        
?>