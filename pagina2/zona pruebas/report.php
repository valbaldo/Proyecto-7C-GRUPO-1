<?php
    include("cn.php");
?>

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style-report.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Reportar Mascota</title> 
</head>
<body>
    <div class="container">
        <header>Reportar Mascota</header>

        <form method="POST" action="insertar.php" enctype="multipart/form-data">
            <div class="form first">    
                <div class="details personal">
                    <span class="title">Datos de la mascota</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nombre</label>
                            <input type="text" placeholder="Ingresar nombre" required name="nombre_mascota">
                        </div>

                       <div class="input-field">
                            <label>Edad</label>
                            <select required>
                                <option disabled selected>Seleccionar Edad</option>
                                <option>Cachorro (Meses a 4 años)</option>
                                <option>Adulto (5 a 12 años)</option>
                                <option>Vejez (13 a 20+ años)</option>
                            </select>
                        </div>


                        <div class="input-field">
                            <label>Foto mascota</label>
                            <input type="file" style="padding-top:10px; font-family: 'Poppins', sans-serif;" required name= "foto">
                        </div>


                        <div class="input-field">

                            <label>Sexo</label>
                            <select required name="sexo">
                                <option disabled selected>Seleccionar sexo</option>
                                <option>Hembra</option>
                                <option>Macho</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Especie</label>
                            <select required name="especie">
                                <option disabled selected>Seleccionar Especie</option>
                                <option>Perro</option>
                                <option>Gato</option>
                                <option>Otro</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Raza</label>
                            <input type="text" placeholder="Ingresar Raza" required name="raza">
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Datos de pérdida</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Localidad</label>
                              <select required name="id_localidad">
                                <option disabled selected>Seleccionar localidad</option>
                                <?php
                                    $v = mysqli_query($conexion,"SELECT * FROM localidad");
                                    while($localidad=mysqli_fetch_row($v)){
                                ?>
                                <option value="<?php echo $localidad[0]?>"><?php echo $localidad[1] ?></option>
                                <?php } ?>
                           </select>
                        </div>

                        <div class="input-field">
                            <label>Barrio</label>
                            <input type="text" placeholder="Ingresar barrio" required name="barrio">
                        </div>

                        <div class="input-field">
                            <label>Calle (opcional)</label>
                            <input type="text" placeholder="Ingresar calle" name="calle">
                        </div>

                         <div class="input-field">
                            <label>Fecha perdida</label>
                            <input type="date" placeholder="Ingresar fecha" required name="fecha_perdida">
                        </div>

                        <div class="input-field">
                            <label>¿Tenia chapita?</label>
                            <select required name="chapita">
                                <option disabled selected>Seleccionar opcion</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Obsevaciones/acalaraciones extra</label>
                            <input type="text" placeholder="Ingresar observaciones" required name="observacion">
                        </div>



                    <button class="nextBtn">
                        <span class="btnText">Siguiente</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>
 </div>

<div class="form second">
                <div class="details address">

                            <div>
                                <p class="lead"> Para mantener el orden y organización de la pagina, NOSOTROS te enviaremos cada un mes un mensaje de Whatsapp para revisar el estado de tu mascota: </p>

                                <p class="lead">   - Si YA FUE encontrada: procederemos a eliminar la publicacion.</p>
                                <p class="lead">   - Si aun NO FUE encontrada: la publicacion se mantendra activa.</p>
                                <p class="lead">   - Si NO recibimos respuesta en un lapso de 7 dias: procederemos a eliminar la publicacion. </p>

                               <p class="lead"> Solicitamos que nos facilites tu numero de telefono celular para poder realizar este seguimiento a tu mascota</p>
                            </div>

<div>


                    <div class="fields">
                        <div class="input-field">
                            <label> </label>
                            <input type="number" placeholder="Ingresar telefono celular" required name="celular">
                        </div>
                    </div>
<div class="col-12">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3" required>
        Acepto que me envien mensajes por Whatsapp para verificar el estado de mi mascota.
      </label>
      
    </div>
  </div>
  <div>
    <br></br>
    </div>
   

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Atras</span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Enviar formulario</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>
        </div>

    <script src="script.js"></script>
</body>
</html>