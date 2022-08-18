<?php
	include ("cn.php");

	$nombre= $_POST['nombre_mascota'];
	$edad=$_POST['edad'];
	$descripcion= $_POST['descripcion'];
	$lugar= $_POST['lugar'];

	$insertar= "INSERT INTO reportar(nombre_mascota, raza, barrio, calle, observacion) VALUES ('$nombre_mascota', '$raza','$barrio','$calle','$observacion')";

	$resultado=mysqli_query($conexion, $insertar);
	if($resultado){
            echo'<script type="text/javascript">
            alert("Reporte enviado");
            window.location.href="../Registrar y login/reportarlog.php";
            </script>';
	} else{
            echo'<script type="text/javascript">
            alert("No se pudo enviar el reporte");
            window.location.href="../Registrar y login/reportarlog.php";
            </script>';
		}
?>