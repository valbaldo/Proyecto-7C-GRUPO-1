<?php
	include ("cn.php");

	$nombre_mascota= $_POST['nombre_mascota'];
	$raza= $_POST['raza'];
	$barrio= $_POST['barrio'];
	$calle= $_POST['calle'];
	$observacion= $_POST['observacion'];
	$celular= $_POST['celular'];
	$id_localidad= $_POST['id_localidad'];

	$insertar= "INSERT INTO perdidos(nombre_mascota, raza, barrio, calle, observacion, celular) SET ('$id_localidad')";

	$insertar= "INSERT INTO perdidos(nombre_mascota, raza, barrio, calle, observacion, celular) VALUES ('$nombre_mascota','$raza', '$barrio','$calle','$observacion','$celular')";

	$resultado=mysqli_query($conexion, $insertar);
	if($resultado){
            echo'<script type="text/javascript">
            alert("Reporte enviado");
            window.location.href="../index.php";
            </script>';
	} else{
            echo'<script type="text/javascript">
            alert("No se pudo enviar el reporte");
            window.location.href="report.php";
            </script>';
		}
?>	