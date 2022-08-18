<?php
    include("cn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="pruebas.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Reportar Mascota</title> 
</head>
<body>
    <div class="container">
        <header>Reportar Mascota</header>

        <form method="post" action="insertar.php" enctype="multipart/form-data">
            <div class="form first">    
                <div class="details personal">
                    <span class="title">Datos de la mascota</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nombre</label>
                            <input type="text" placeholder="Ingresar nombre" required name="nombre_mascota">
                        </div>
                    </div>
                    <button class="sumbit">
                            <span class="btnText">Enviar formulario</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                </div>
            </div>
        </form>
    </div>
</body>