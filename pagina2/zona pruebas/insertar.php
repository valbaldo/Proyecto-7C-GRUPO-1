<?php
	include ("cn.php");

	$nombre_mascota= $_POST['nombre_mascota'];

	$insertar= "INSERT INTO perdidos(nombre_mascota) VALUES ('$nombre_mascota')";

	$resultado=mysqli_query($conexion, $insertar);
	if($resultado){
            echo'<script type="text/javascript">
            alert("Reporte enviado");
            window.location.href="pruebas.php";
            </script>';
	} else{
            echo'<script type="text/javascript">
            alert("No se pudo enviar el reporte");
            window.location.href="pruebas.php";
            </script>';
		}
?>