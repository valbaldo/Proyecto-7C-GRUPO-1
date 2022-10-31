<?php
	include ("cn.php");
	session_start();
	$nombre_mascota= $_POST['nombre_mascota'];
	$edad= $_POST['edad'];
	$foto= addslashes(file_get_contents($_FILES['foto']['tmp_name']));
	$sexo= $_POST['sexo'];
	$especie= $_POST['especie'];
	$raza= $_POST['raza'];
	$localidad= $_POST['localidad'];
	$barrio= $_POST['barrio'];
	$calle= $_POST['calle'];
	$fecha_perdida= date('d-m-Y', strtotime($_POST['fecha_perdida']));
	$chapita= $_POST['chapita'];
	$observacion= $_POST['observacion'];
	$id = $_SESSION["IdUsuario"];
	$insertar= "INSERT INTO perdidos(nombre_mascota, ID_usuario, edad, foto, sexo, especie, raza, localidad, barrio, calle, fecha_perdida, chapita, observacion) VALUES ('$nombre_mascota', '$id','$edad', '$foto','$sexo','$especie','$raza','$localidad','$barrio','$calle','$fecha','$chapita','$observacion')";

	$resultado=mysqli_query($conexion, $insertar);
	if($resultado){
            echo'<script type="text/javascript">
            alert("Reporte enviado");
            window.location.href="../index.log.php";
            </script>';
	} else{
            echo'<script type="text/javascript">
            alert("No se pudo enviar el reporte");
            window.location.href="report.php";
            </script>';
		}
?>