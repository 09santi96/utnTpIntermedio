<?php
## clave para registrarse ##
define('PWD_REG', '9999');
##------------------------##
        if(isset($_POST['submit'])){
            $user = $_POST['user'];
            $mail = $_POST['mail'];
            $dni = $_POST['dni'];
            $pass = $_POST['pass'];
            $passRepeat = $_POST['pass2'];
            $passReg = $_POST['passReg'];
            

            require_once'./phps/dbConnect.php';
            require_once'./phps/functions_inc.php';
            
            if(emptyInputSignup($user, $mail, $dni, $pass, $passRepeat) !== false ){
                header("Location:form.php?error=emptyInput");
                exit();
            }
            if(invalidUserId($user) !== false ){
                header("Location:form.php?error=invalidUserId");
                exit();
            }
            if(invalidEmail($mail) !== false ){
                header("Location:form.php?error=invalidEmail");
                exit();
            }
            if(pwdMatch($pass, $passRepeat) !== false ){
                header("Location:form.php?error=invalidPassMatch");
                exit();
            }
            if(UserIdExist($conn, $user, $mail) !== false ){
                header("Location:form.php?error=usernameTaken");
                exit();
            }
            if ($passReg == PWD_REG) {
                createUser($conn, $user, $mail, $dni, $pass);
            }else{
                header("Location:form.php?error=invalidPassReg");
                exit();
            }

            

            
        }
        
?>