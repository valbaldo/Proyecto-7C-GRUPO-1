<?php
    include("cn.php");
    session_start();
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

        <form method="post" action="insertar.php" enctype="multipart/form-data">
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
                            <select name="edad" required>
                                <option disabled selected value="">Seleccionar edad</option>
                                <option value="CACHORRO">Cachorro (Meses a 4 años)</option>
                                <option value="ADULTO">Adulto (5 a  12 años)</option>
                                <option value="VEJEZ">Vejez (13 a 20+ años)</option>
                            </select>
                        </div>


                        <div class="input-field">
                            <label>Foto mascota</label>
                            <input type="file" name="foto" style="padding-top:10px; font-family: 'Poppins', sans-serif;" required>
                        </div>


                        <div class="input-field">

                            <label>Sexo</label>
                            <select required name="sexo">
                                <option disabled selected value="">Seleccionar sexo</option>
                                <option value="HEMBRA">Hembra</option>
                                <option value="MACHO">Macho</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Especie</label>
                            <select required name="especie">
                                <option disabled selected value="">Seleccionar Especie</option>
                                <option value="PERRO">Perro</option>
                                <option value="GATO">Gato</option>
                                <option value="OTRO">Otro</option>
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
                              <select required name="localidad">
                                <option disabled selected value="">Seleccionar localidad</option>
                                <option value="ALMIRANTE BROWN">Almirante Brown</option>
                                <option value="AVELLANEDA">Avellaneda</option>
                                <option value="BERAZATEGUI">Berazategui</option>
                                <option value="ESTEBAN ECHEVERRIA">Esteban Echeverría</option>
                                <option value="EZEIZA">Ezeiza</option>
                                <option value="FLORENCIA VARELA">Florencio Varela</option>
                                <option value="GENERAL SAN MARTIN">General San Martín</option>
                                <option value="HURLINGHAM">Hurlingham</option>
                                <option value="ITUZAINGO">Ituzaingó</option>
                                <option value="JOSE C. PAZ">José C. Paz</option>
                                <option value="LA MATANZA">La Matanza</option>
                                <option value="LANUS">Lanús</option>
                                <option value="LOMAS DE ZAMORA">Lomas de Zamora</option>
                                <option value="MALVINAS ARGENTINAS">Malvinas Argentinas</option>
                                <option value="MERLO">Merlo</option>
                                <option value="MORENO">Moreno</option>
                                <option value="MORON">Morón</option>
                                <option value="QUILMES">Quilmes</option>
                                <option value="SAN FERNANDO">San Fernando</option>
                                <option value="SAN ISIDRO">San Isidro</option>
                                <option value="SAN MIGUEL">San Miguel</option>
                                <option value="TIGRE">Tigre</option>
                                <option value="TRES DE FEBRERO">Tres de Febrero</option>
                                <option value="VICENTE LOPEZ">Vicente López</option>
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
                                <option disabled selected value="">Seleccionar opcion</option>
                                <option value="SI">Si</option>
                                <option value="NO">No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Obsevaciones/aclaraciones extra</label>
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
                                <p class="lead"> Para mantener el orden y organización de la pagina, NOSOTROS te enviaremos cada un mes un mail (que esta asociado a tu cuenta)para revisar el estado de tu mascota: </p>

                                <p class="lead">   - Si YA FUE encontrada: procederemos a eliminar la publicacion.</p>
                                <p class="lead">   - Si aun NO FUE encontrada: la publicacion se mantendra activa.</p>
                                <p class="lead">   - Si NO recibimos respuesta en un lapso de 7 dias: procederemos a eliminar la publicacion. </p>

                               <p class="lead"> Tambien Solicitamos que nos facilites tu numero de telefono celular para poder mostrarselo a la persona interesada en contactarse con vos para aportar info.</p>
                            </div>

<div>


                    <div class="fields">
                        <div class="input-field">
                            <label> </label>
                            <input type="number" placeholder="Ingresar telefono celular" required name="cel">
                        </div>
                    </div>
<div class="col-12">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3" required>
        Acepto que me envien mails para verificar el estado de mi mascota.
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
                        
                        <button type="submit" name="enviar" class="sumbit">
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