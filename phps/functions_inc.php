<?php
    function emptyInputSignup($user, $mail, $dni, $pass, $passRepeat){
        $result="";
        if (empty($user) || empty($mail) || empty($dni) || empty($pass) || empty($passRepeat)) {
            $result=true;
        }else{
            $result=false;
        }
        return $result;
    }
    //-----------------------------------------------------------------------------------------
    function invalidUserId($user){
        $result="";
        if ( !preg_match("/^[a-zA-Z0-9]*$/", $user) ) {
            $result=true;
        }else{
            $result=false;
        }
        return $result;
    }
    //-----------------------------------------------------------------------------------------
    function invalidEmail($mail){
        $result="";
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $result=true;
        }else{
            $result=false;
        }
        return $result;
    }
//-----------------------------------------------------------------------------------------

    function pwdMatch($pass, $passRepeat){
        $result="";
        if ($pass !== $passRepeat) {
            $result=true;
        }else{
            $result=false;
        }
        return $result;
    }
//-----------------------------------------------------------------------------------------
  function UserIdExist($conn, $user, $mail){
       $sql = "SELECT * FROM usuarios WHERE usuario = ? OR email = ?;";
       $stmt = mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt, $sql) ){
            header("Location:form.php?error=userExist");
            exit();
       }
       
       mysqli_stmt_bind_param($stmt, "ss", $user, $mail);
       mysqli_stmt_execute($stmt);

       $resultData = mysqli_stmt_get_result($stmt);

       if($row = mysqli_fetch_assoc($resultData)){
        return $row;
       }else{
           $result = false;
           return $result;
       }
       mysqli_stmt_close($stmt);
    }

//-----------------------------------------------------------------------------------------
  function createUser($conn, $user, $mail, $dni, $pass){ //el orden de los parametros debe coincidir con el orden de la tabla
    $sql = "INSERT INTO usuarios (usuario, email, dni, usersPwd) values(?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql) ){
         header("Location:form.php?error=createUserFail");
         exit();
    }
    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $user, $mail, $dni, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("Location:form.php?error=none");
    exit();
 }

//---------------------------------log in functions----------------------------------------------------

function emptyInputLogin($user, $pass){
        $result="";
        if (empty($user) || empty($pass)) {
            $result=true;
        }else{
            $result=false;
        }
        return $result;
    }
function loginUser($conn, $user, $pass){
    $uIdExist = UserIdExist($conn, $user, $user);
    if($uIdExist === false){
        header("Location:index.php?error=wrongLogin");
        exit();
    }

    $passHashed = $uIdExist['usersPwd'];
    $checkPwd = password_verify($pass, $passHashed);
    if($checkPwd === false){
        header("Location:index.php?error=wrongLogin");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION['userID'] = $uIdExist['id_usuario']; // auto_i id user reference
        $_SESSION['userUID'] = $uIdExist['usuario']; // user name reference
        header("Location:./sitio.php");
        exit();
    }
}
?>