<?php
	include ("cn.php");

	$tamanio= $_POST['tamanio'];
	$edad= $_POST['edad'];
	$foto= addslashes(file_get_contents($_FILES['foto']['tmp_name']));
	$sexo= $_POST['sexo'];
	$especie= $_POST['especie'];
	$raza= $_POST['raza'];
	$tiene_vacuna= $_POST['tiene_vacuna'];
	$tiene_problemas= $_POST['tiene_problemas'];
	$observacion= $_POST['observacion'];
	$cuales_vacunas= $_POST['cuales_vacunas'];
	$cuales_problemas= $_POST['cuales_problemas'];
	$barrio= $_POST['barrio'];


	

	$insertar= "INSERT INTO adopcion(tamanio, edad, foto, sexo, especie, raza, tiene_vacuna, tiene_problemas, observacion, cuales_vacunas, cuales_problemas, barrio) VALUES ('$tamanio','$edad', '$foto','$sexo','$especie','$raza','$tiene_vacuna', '$tiene_problemas', '$observacion', '$cuales_vacunas', '$cuales_problemas', '$barrio')";

	$resultado=mysqli_query($conexion, $insertar);
	if($resultado){
            echo'<script type="text/javascript">
            alert("Reporte enviado");
            window.location.href="../index.php";
            </script>';
	} else{
            echo'<script type="text/javascript">
            alert("No se pudo enviar el reporte");
            window.location.href="form-adopcion.php";
            </script>';
		}
?>