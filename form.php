<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Formulario</title>
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
                    <h2>Complete con sus datos</h2>
                    
                    <?php //php validate form
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "invalidUserId"){
                                echo "<p>Nombre de usuario invalido!</p>";
                            }
                            elseif($_GET['error'] == "emptyInput"){
                                echo "<p>Completa los campos!</p>";
                            }
                            elseif($_GET['error'] == "invalidEmail"){
                                echo "<p>Email invalido!</p>";
                            }
                            elseif($_GET['error'] == "invalidPassMatch"){
                                echo "<p>Las contraseñas no coinciden!</p>";
                            }
                            elseif($_GET['error'] == "usernameTaken"){
                                echo "<p>El nombre de usuario ya existe</p>";
                            }
                            elseif($_GET['error'] == "userExist" ){
                                echo "<p>El usuario ya ha sido registrado!</p>";
                            }
                            elseif($_GET['error'] == "createUserFail" ){
                                echo "<p>Error!!</p>";
                            }
                            elseif($_GET['error'] == "none"){
                                echo "<p>Registrado correctamente!</p>";
                                header("Refresh:10 Location:index.php");
                            }elseif($_GET['error'] == "invalidPassReg"){
                                echo "<p>Clave de registro erronea!</p>";
                                header("Refresh:10 Location:index.php");
                            }
                            
                            
                        }     
                    ?>
                    <form action="checkform.php" method="post" >
                        <div class="inputBox">
                            <input type="text" placeholder="Usuario" name="user" required autofocus>
                        </div>
                        <div class="inputBox">
                            <input type="email" placeholder="Email" name="mail" required>
                        </div>
                        <div class="inputBox">
                            <input type="text" placeholder="Dni" name="dni" required>
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Contraseña" name="pass" id="myInput1" required>
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Repetir Contraseña" name="pass2" id="myInput2" required>
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Clave registro" name="passReg" id="myInput3" required>

                        </div>
                        <br/>
                        <input type="checkbox" onclick="showPwd()">Mostrar contraseñas</input>
                        
                        <div class="inputBox">
                            <input type="submit" name="submit" value="Enviar"></input>
                            <a class="forget" href="./index.php">Volver</a>
                        </div>
                        <button  class="btn" type="reset" name="reset" value="Limpiar">Limpiar</button>   
                        
                    </form>
                </div>
            </div>
        </div>
            
    </section>
<script src="./main.js"></script>  

</body>
</html>