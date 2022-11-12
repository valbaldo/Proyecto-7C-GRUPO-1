<?php
include ("cn.php");
include('config.php');

if(isset($_POST['registro'])){
    $usuario = $_POST['username'];
    $mail=$_POST['mail'];
    $pass = $_POST['pass'];
    $foto= addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $celular = $_POST['celular'];
    $passCifrada = password_hash($pass,PASSWORD_DEFAULT);
    

    $consultaUser = $conn -> prepare("SELECT * FROM usuarios WHERE username= :user");
    $consultaUser -> bindParam("user",$usuario,PDO::PARAM_STR);
    $consultaUser -> execute();

    $resultadoUser = $consultaUser->fetch(PDO::FETCH_ASSOC);
    
    if($resultadoUser){
        echo'<script type="text/javascript">
        alert("El usuario ya existe");
        window.location.href="../../register.html";
        </script>';
    }
    else{
        $consultaRegistro = $conn -> prepare("INSERT INTO usuarios(username, pass, tipo, mail, foto, celular) VALUES (:usuario , :pass, 2, '$mail', '$foto', '$celular')");
        $consultaRegistro -> bindParam("usuario",$usuario,PDO::PARAM_STR);
        $consultaRegistro -> bindParam("pass",$passCifrada,PDO::PARAM_STR);
        $resultadoRegistro = $consultaRegistro -> execute();
        if(!$resultadoRegistro){
            echo'<script type="text/javascript">
            alert("No se pudo registrar el usuario");
            window.location.href="../../register.html";
            </script>';
        }
        else{
            echo'<script type="text/javascript">
            alert("Usuario registrado!");
            window.location.href="../../index.php";
            </script>';
        }
        
    }
}
?>