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
        window.location.href="../../../adoptar-lista.php";
        </script>';
    }
    else{

        if(password_verify($pass,$resultado['pass'])){
            $_SESSION['ID_usuario'] = $resultado['ID_usuario'];
            $_SESSION['username'] = $resultado['username'];

            if($resultado['tipo'] == 1){
                header("Location: ../../../index-admin.php");
            }else{
                header("Location: ../../../adoptar-lista-log.php");
            }
        }
        else{
            echo'<script type="text/javascript">
            alert("User y pass incorrectos");
            window.location.href="../../../adoptar-lista.php";
            </script>';
        }
    }
}
else{
    echo "Error";
}
?>