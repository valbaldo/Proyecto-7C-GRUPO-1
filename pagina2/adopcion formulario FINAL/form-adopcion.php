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
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Dar en adopcion</title> 
</head>
<body>
    <div class="container">
        <header>Dar en adopcion una mascota</header>

        <form method="post" action="insertar-adoptar.php" enctype="multipart/form-data">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Datos de la mascota</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Tamaño Mascota</label>
                            <select name="tamanio" required>
                                <option disabled selected value="">Seleccionar tamaño</option>
                                <option value="MINI">Mini</option>
                                <option value="PEQUEÑO">Pequeño</option>
                                <option value="MEDIANO">Mediano</option>
                                <option value="GRANDE">Grande</option>
                            </select>
                        </div>
                        

                       <div class="input-field">
                            <label>Edad</label>
                            <input name="edad" type="text" placeholder="Ingresar edad" required>
                        </div>


                        <div class="input-field">
                            <label>Foto mascota</label>
                            <input name="foto"type="file" placeholder="Seleccioné uil-navigator imagen" required>
                        </div>


                        <div class="input-field">

                            <label>Sexo</label>
                            <select name="sexo" required>
                                <option disabled selected value="">Seleccionar sexo</option>
                                <option value="HEMBRA">Hembra</option>
                                <option value="MACHO">Macho</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Especie</label>
                            <select name="especie" required>
                                <option disabled selected value="">Seleccionar especie</option>
                                <option value="PERRO">Perro</option>
                                <option value="GATO">Gato</option>
                                <option value="OTRO">Otro</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Raza</label>
                            <input name="raza" type="text" placeholder="Ingresar Raza" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Condicion medica de mascota</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>¿Tiene alguna vacuna?</label>
                              <select name="tiene_vacuna" required>
                                <option disabled selected value="">Seleccionar</option>
                                <option value="SI">Si</option>
                                <option value="NO">No</option>
                                <option value="NO LO SE">No lo se</option>
                           </select>
                        </div>

                        <div class="input-field">
                            <label>¿Tiene algun problema de salud?</label>
                            <select name="tiene_problemas" required>
                                <option disabled selected value="">Seleccionar opcion</option>
                                <option value="SI">Si</option>
                                <option value="NO">No</option>
                            </select>
                        </div>

                            
                                <div style="height: 70px;"class="input-field">
                            <label>Obsevaciones/aclaraciones</label>
                            <input name="observacion" type="text" placeholder="¡En caso de que algun dato que considere de relevancia no se encuentre en el cuestionario, ingresarlo en las observaciones extra!">
                        </div>
                        <div class="input-field">
                            <label>En caso de que si ¿Cuales vacunas?</label>
                            <input name="cuales_vacunas" type="text" placeholder="Ingresar Vacunas">
                        </div>
                        
                                
                             <div class="input-field">
                            <label>En caso de que si ¿Cuales problemas?</label>
                            <input name="cuales_problemas" type="text" placeholder="Ingresar Enfermedades">
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
                               
                            <div>
                               <p class="lead"> * ¡Solicitamos que nos facilites la zona (barrio, no direccion exacta) en la que deberia ser retirada la mascota, para poder brindarlo como informacion a la persona interesada en adoptar y darle un nuevo hogar a la mascota! </p>
                            </div>
                            

<div>

                    <div class="fields">
                        <div class="input-field">
                            <label> </label>
                            <input name="barrio" type="text" placeholder="Ingresar barrio" required>
                        </div>
                    </div>
  <p class="lead"> * Para mantener el orden y organización de la pagina, NOSOTROS te enviaremos cada mes un mail (que esta asociado a tu cuenta) para revisar el estado de tu mascota </p>

                                <p class="lead">  * Tambien Solicitamos que nos facilites tu numero de telefono celular para poder mostrarselo a la persona interesada en contactarse con vos para darle un nuevo hogar a tu mascota!</p>
                                 <div class="fields">
                        <div class="input-field">
                            <label> </label>
                            <input type="number" placeholder="Ingresar numero de celular" required>
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
    </div>
   

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Atras</span>
                        </div>
                        
                        <button class="submit">
                            <span class="btnText">Enviar formulario</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>