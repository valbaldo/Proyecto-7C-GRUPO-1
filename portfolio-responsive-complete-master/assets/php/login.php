<?php

include('config.php');
session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $consulta = $conn->prepare("SELECT * FROM usuarios WHERE username =:usuario");
    $consulta->bindParam("usuario", $username, PDO::PARAM_STR); 
    $consulta ->execute();

    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    if(!$resultado){
        echo'<script type="text/javascript">
        alert("User y pass incorrectos");
        window.location.href="../loginvista.html";
        </script>';
    }
    else{

        if(password_verify($pass,$resultado['pass'])){ 
            $_SESSION['IdUsuario'] = $resultado['ID'];
            $_SESSION['username'] = $resultado['username'];
           header("Location:../../index.php");
        }
        else{
            echo'<script type="text/javascript">
            alert("User y pass incorrectos");
            window.location.href="../loginvista.html";
            </script>';
        }
    }
}
else{
    echo "Error";
}
?>