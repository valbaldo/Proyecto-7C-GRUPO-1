<?php

include('config.php');

session_start();

if(isset($_GET['cerrar_sesion'])){
    session_unset();

    session_destroy();
}
if(isset($_SESSION['rol'])){
    switch ($_SESSION['rol']) {
        case '1':
            header('../../../index.php')
        break;

        case '2':
            header('../../../index.php')
        break;

        default:
    }
}

if (isset($_POST['username']) && isset($_POST['pass'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $query = $db->connect()->prepare("SELECT * FROM usuarios WHERE username =:usuario");
    $query->execute(['username' => $username, 'pass' => $pass]);

    $row= $query->fetch->fetch(PDO::FETCH_NUM);
    if ($row == true) {
        // code...

    }else{
        echo "string";
    }
}



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
        window.location.href="../../../index.html";
        </script>';
    }
    else{

        if(password_verify($pass,$resultado['pass'])){ 
            $_SESSION['IdUsuario'] = $resultado['ID'];
            $_SESSION['username'] = $resultado['username'];
           header("Location: ../../../index.php");
        }
        else{
            echo'<script type="text/javascript">
            alert("User y pass incorrectos");
            window.location.href="../../../index.html";
            </script>';
        }
    }
}
else{
    echo "Error";
}
?>