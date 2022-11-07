<?php
    include("assets/php/cn.php");
    session_start();
    
  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $parts = parse_url($actual_link);
    parse_str ($parts['query'], $query);

    $usuarios="SELECT a.*, u.username FROM adopcion a JOIN usuarios u ON u.ID_usuario = a.ID_usuario WHERE a.ID_adopcion = ".$parts['query'];

    $resultado=mysqli_query($conexion, $usuarios);
    $row=mysqli_fetch_assoc($resultado);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscando Huellitas</title>
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  

</head>

<body>
  <title>Buscando Huellitas</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <nav class="navbar fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index-log.php">
                    <img src="assets/img/logo.png" alt="" class="nav__logo-img">
                    Buscando Huellitas
                </a>
    <ul class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $_SESSION["username"]?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="perfilusuario.php?<?php echo $_SESSION["ID_usuario"]?>">Mi cuenta</a></li>
              <li><a class="dropdown-item" href="assets/php/cerrarSesion-publicacionperdidos.php">Cerrar sesión</a></li>
              <li>
                
              </li>
            </ul>
          </ul>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Buscando Huellitas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
        <div class="offcanvas-body">
        <div class="btn-group">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Mascotas desaparecidas</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="perdidos-lista-log.php">Buscar mascota</a></li>
                <li><a class="dropdown-item" href="#" id="btn-abrir-popup1">Reportar mascota</a></li>
            <!--==================== PRIMER BOTON ====================-->
                    <div class="overlay" id="overlay1">
                    <div class="popup" id="popup1">
                    <a href="#" id="btn-cerrar-popup1" type="button" class="btn-close" aria-label="Close"></a>
                    <h3>Iniciar sesión</h3>
                    <form action="assets/php/login-index-report.php" method="POST">
                    <div class="contenedor-inputs">
                        <input name="username" type="text" placeholder="Usuario" required>
                        <input name="pass" type="password" placeholder="Contraseña" required>
                    </div>
                    <input name="login" type="submit" class="btn-submit" value="Iniciar sesion">
                    </form>
                    <br></br>
                    <p>¿No tienes una cuenta? <a class="link" href="register.html">Registrate </a></p>
                    </form>
                    </div>
                    </div>
                    </div>
                    <script type="text/javascript" src="alerta.js"></script>
            </ul>
            <!--==================== SEGUNDO BOTON ====================-->
            <div style="margin-top: 1rem;">
            <div class="btn-group">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Adopcion</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="adoptar-lista.php">Adoptar</a></li>
                <li><a class="dropdown-item" href="#" id="btn-abrir-popup2">Dar en adopcion</a></li>
                    <div class="overlay" id="overlay2">
                    <div class="popup" id="popup2">
                    <a href="#" id="btn-cerrar-popup2" type="button" class="btn-close" aria-label="Close"></a>
                    <h3>Iniciar sesión</h3>
                    <form action="assets/php/login-adoptar.php" method="POST">
                    <div class="contenedor-inputs">
                        <input name="username" type="text" placeholder="Usuario" required>
                        <input name="pass" type="password" placeholder="Contraseña" required>
                    </div>
                    <input name="login" type="submit" class="btn-submit" value="Iniciar sesion">
                    </form>
                    <br></br>
                    <p>¿No tienes una cuenta? <a class="link" href="register.html">Registrate </a></p>
                    </form>
                    </div>
                    </div>
                    </div>
                    <script type="text/javascript" src="alerta2.js"></script>
            </div>
        </div>
        
    </div>
    </div>
  </div>
</nav>

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;900&display=swap');
@import "bootstrap/scss/bootstrap";
/*=============== VARIABLES CSS ===============*/
:root {
  --header-height: 3rem;

  /*========== Colors ==========*/
  --hue: 14;
  --verdeclaro: 135;
  --verdeoscuro:168 ;
  --first-color: hsl(var(--hue), 91%, 54%);
  --first-color-alt: hsl(var(--hue), 91%, 50%);
  --title-color: var(--verdeo);
  --text-color: var(--verdeo);
  --text-color-light: hsl(var(--hue), 4%, 55%);
  --second-color: hsl(var(--verdeclaro), 32%, 80%);
  --verdeo: hsl(var(--verdeoscuro), 97%, 13%);

  /*Green gradient*/
  --body-color: white;
  --container-color: var(--second-color);
  
  /*Red gradient*/
  /* --body-color: linear-gradient(90deg, hsl(360, 28%, 40%) 0%, hsl(18, 28%, 40%) 100%);
  --container-color: linear-gradient(136deg, hsl(360, 28%, 35%) 0%, hsl(18, 28%, 35%) 100%); */

  /*Black solid*/
  /* --body-color: hsl(30, 8%, 8%);
  --container-color: hsl(30, 8%, 10%); */

  /*========== Font and typography ==========*/
  --body-font: 'Poppins', sans-serif;
  --biggest-font-size: 2rem;
  --h1-font-size: 1.5rem;
  --h2-font-size: 2.5rem;
  --h3-font-size: 1rem;
  --normal-font-size: .938rem;
  --small-font-size: .813rem;
  --smaller-font-size: .75rem;

  /*========== Font weight ==========*/
  --font-medium: 500;
  --font-semi-bold: 600;
  --font-black: 900;

  /*========== Margenes Bottom ==========*/
  --mb-0-25: .25rem;
  --mb-0-5: .5rem;
  --mb-0-75: .75rem;
  --mb-1: 1rem;
  --mb-1-5: 1.5rem;
  --mb-2: 2rem;
  --mb-2-5: 2.5rem;

  /*========== z index ==========*/
  --z-tooltip: 10;
  --z-fixed: 100;
}

/* Responsive typography */
@media screen and (min-width: 992px) {
  :root {
    --biggest-font-size: 4rem;
    --h1-font-size: 2.25rem;
    --h2-font-size: 1.5rem;
    --h3-font-size: 1.25rem;
    --normal-font-size: 1rem;
    --small-font-size: .875rem;
    --smaller-font-size: .813rem;
  }
}

/*=============== BASE ===============*/
*{
 
  padding: 0;
  
}

html{
  scroll-behavior: smooth;
}

body{
  margin: var(--header-height) 0 0 0;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  background: var(--body-color);
  color: var(--text-color);
}

.home__title{
  color: var(--verdeo);
  font-weight: var(--font-semi-bold);
  text-align: left;
}

h1,h2,h3,h4{
  color: var(--verdeo);
  font-weight: var(--font-semi-bold);
  text-align: center;
}
h6{
  color: gray;
 align-items: center;
 text-align: center;
 
}
h5{
  color: var(--verdeo);
 text-align: center;
 size: 2rem;

 
}
ul{
  list-style: none;
}

p{
  text-decoration: none;
}
.link{
    text-decoration: none;
    color: var(--verdeo);
    font-weight: 600;
}
}

img{
  max-width: 100%;
  height: auto;
}


/*=============== REUSABLE CSS CLASSES ===============*/
.section{
  padding: 4.5rem 0 2rem;
}

.section__title{
  font-size: var(--h2-font-size);
  margin-bottom: var(--mb-2);
  text-align: left;
}

/*=============== LAYOUT ===============*/
.container{
  max-width: 968px;
  margin-left: var(--mb-1-5);
  margin-right: var(--mb-1-5);
}

.grid{
  display: grid;
}

.main{
  overflow: hidden; /*For animation*/
}

/*=============== HEADER ===============*/
.header{
  color: var(--second-color);
  width: 100%;
  background: var(--second-color); 
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--z-fixed);
}
.loginboton{
  margin-top: 0.5rem;
}

.login-nav > li{
  float: left;
}

.login-nav li ul{
  display: none;
  position: absolute;
  max-width: 140px;

}

/*=============== NAV ===============*/
.navbar {
    flex-wrap:initial;

}

.nav{
  height: var(--header-height);
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.nav__logo{
  display: flex;
  margin-top: 10px;
  column-gap: .5rem;
  font-weight: var(--font-medium);
}

.nav__logo-img{
  width: 70px;
  margin-top: -15px;
  position: center;
}

.nav__link,
.nav__logo,
.nav__toggle,
.nav__close{
  color: var(--title-color);
}

.nav__toggle{
  font-size: 1.25rem;
  cursor: pointer;
}

@media screen and (max-width: 991px){
  .nav__menu{
    position: fixed;
    width: 100%;
    background: var(--container-color);
    top: -150%;
    left: 0;
    padding: 3.5rem 0;
    transition: .4s;
    z-index: var(--z-fixed);
    border-radius: 0 0 1.5rem 1.5rem;
  }
}

.nav__img{
  width: 100px;
  position: absolute;
  top: 0;
  left: 0;
}

.btn 

{
  position: left;
  color: var(--verdeo);
  border-color: var(--second-color);
  background-color: var(--second-color);

}
.btn3 

{ 
  margin right: 25rem;
  color: var(--verdeo);
  border-color: var(--second-color);
  background-color: var(--second-color);
    --bs-btn-color: #fff;
    --bs-btn-bg: #6c757d;
    --bs-btn-border-color: var(--second-color);
    --bs-btn-hover-color: var(--verdeo);
    --bs-btn-hover-bg: var(--second-color);
    --bs-btn-hover-border-color: #565e64;
    --bs-btn-focus-shadow-rgb: 130,138,145;
    --bs-btn-active-color: var(--verdeo);
    --bs-btn-active-bg: #565e64;
    --bs-btn-active-border-color: #51585e;
    --bs-btn-active-shadow: inset 0 3px 5pxrgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #6c757d;
    --bs-btn-disabled-border-color: #6c757d;

}


.btn-secondary {
    --bs-btn-color: #fff;
    --bs-btn-bg: #6c757d;
    --bs-btn-border-color: var(--second-color);
    --bs-btn-hover-color: var(--verdeo);
    --bs-btn-hover-bg: var(--second-color);
    --bs-btn-hover-border-color: #565e64;
    --bs-btn-focus-shadow-rgb: 130,138,145;
    --bs-btn-active-color: var(--verdeo);
    --bs-btn-active-bg: #565e64;
    --bs-btn-active-border-color: #51585e;
    --bs-btn-active-shadow: inset 0 3px 5pxrgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #6c757d;
    --bs-btn-disabled-border-color: #6c757d;
}


.btn-secondary {
    --bs-btn-color: #fff;
    --bs-btn-bg: #6c757d;
    --bs-btn-border-color: var(--second-color);
    --bs-btn-hover-color: var(--verdeo);
    --bs-btn-hover-bg: var(--second-color);
    --bs-btn-hover-border-color: #565e64;
    --bs-btn-focus-shadow-rgb: 130,138,145;
    --bs-btn-active-color: var(--verdeo);
    --bs-btn-active-bg: #565e64;
    --bs-btn-active-border-color: #51585e;
    --bs-btn-active-shadow: inset 0 3px 5pxrgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #6c757d;
    --bs-btn-disabled-border-color: #6c757d;
}


.btn-check:checked+.btn, .btn.active, .btn.show, .btn:first-child:active, :not(.btn-check)+.btn:active {
    color: var(--verdeo);
    background-color: var(--second-color);
    border-color: var(--second-color);
    }


    .btn:first-child:hover, :not(.btn-check)+.btn:hover {
    color: var(--bs-btn-hover-color);
    background-color: var(--bs-btn-hover-bg);
    border-color: var(--se);
}


   .bg-light {
    
    background-color: #bcdcc4;
}

.navbar{
  background-color: #bcdcc4;
}

.nav__close{
  font-size: 1.8rem;
  position: absolute;
  top: .5rem;
  right: .7rem;
  cursor: pointer;
}

.nav__list{
  display: flex;
  flex-direction: column;
  align-items: center;
  row-gap: 1.5rem;
}

.nav__link{
  text-transform: uppercase;
  font-weight: var(--font-black);
  transition: .4s;
}

.nav__link:hover{
  color: var(--text-color);
}

/* Show menu */
.show-menu{
  top: 0;
}

/* Change background header */
.scroll-header{
  background: var(--second-color);
}

/* Active link */
.active-link{
  position: relative;
}

.active-link::before{
  content: '';
  position: absolute;
  bottom: -.75rem;
  left: 45%;
  width: 5px;
  height: 5px;
  background-color: var(--title-color);
  border-radius: 50%;
}

/*=============== HOME ===============*/
.home__content{
  row-gap: 1rem;
}

.home__group{
  display: grid;
  position: relative;
  
}

.home__img{
  max-width: 100%;
  max-height: 100%;
  margin-top: 4rem;
  height: 8px;
  justify-self: center;
}

.home__indicator{
  width: 8px;
  height: 8px;
  background-color: var(--title-color);
  border-radius: 50%;
  position: absolute;
  top: 7rem;
  right: 2rem;
}

.home__indicator::after{
  content: '';
  position: absolute;
  width: 1px;
  height: 48px;
  background-color: var(--title-color);
  top: -3rem;
  right: 45%;
}

.home__details-img{
  position: absolute;
  right: .5rem;
}

.home__details-title,
.home__details-subtitle{
  display: block;
  font-size: var(--small-font-size);
  text-align: right;
}

.home__subtitle{
  font-size: var(--h3-font-size);
  text-transform: uppercase;
  margin-bottom: var(--mb-1);
}

.home__title{
  font-size: var(--biggest-font-size);
  font-weight: var(--font-black);
  line-height: 109%;
  margin-bottom: var(--mb-1);
}

.home__description{
  margin-bottom: var(--mb-1);
  text-align: justify;
}

.home__buttons{
  display: flex;
  justify-content: space-between;
}

/* Swiper Class */
.swiper-pagination{
  position: initial;
  margin-top: var(--mb-1);
}

.swiper-pagination-bullet{
  width: 5px;
  height: 5px;
  background-color: var(--title-color);
  opacity: 1;
}

.swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet{
  margin: 0 .5rem;
} 

.swiper-pagination-bullet-active{
  width: 1.5rem;
  height: 5px;
  border-radius: .5rem;
}

/*=============== BUTTONS ===============*/
.centered-elements {
  display: flex;
  justify-content: center;
  width: 100%;
}
.centered-elements2 {
  display: flex;
  justify-content: center;
  width: 100%;
}

@media screen and (max-width: 991px){
  .centered-elements2{
      display: justify;
       width: 100%;
                    }
      }
  

.buttonsoporte{
  display: inline-block;
  background-color: var(--verdeo);
  color: var(--title-color);
  padding: 1rem 1.75rem;
  border-radius: .5rem;
  font-weight: var(--font-medium);
  transition: .3s;
}
.button{
  display: inline-block;
  background-color: var(--verdeo);
  color: var(--second-color);
  padding: 1rem 1.75rem;
  border-radius: 3rem;
  font-weight: var(--font-medium);
  transition: .3s;
  position: center
}
.button2{
  display: inline-block;
  margin-top: 5;
  background-color: var(--verdeo);
  color: var(--second-color);
  padding: 1rem 1.75rem;
  border-radius: .3rem;
  font-weight: var(--font-medium);
  transition: .3s;
}
.button:hover{
  background-color:#6E9979;
}

.button__icon{
  font-size: 1.25rem;
}

.button--ghost{
  border: 2px solid;
  background-color: transparent;
  border-radius: 3rem;
  padding: .75rem 1.5rem;
}

.button--ghost:hover{
  background: none;
}

.button--link{
  color: var(--title-color);
}

.button--flex{
  display: inline-flex;
  align-items: center;
  column-gap: .5rem;
}

/*=============== CATEGORY ===============*/
.category__container{
  grid-template-columns: repeat(2, 1fr);
  gap: 1rem 2rem;
}

.category__data{
  text-align: center;
}

.category__img{
  width: 120px;
  margin-bottom: var(--mb-0-75);
  transition: .3s;
}

.category__title{
  margin-bottom: var(--mb-0-25);
}

.category__data:hover .category__img{
  transform: translateY(-.5rem);
}





/*=============== NEW ARRIVALS ===============*/
.new__container{
  padding-top: 1rem;
}

.new__content{
  position: relative;
  background: var(--container-color);
  width: 240px;
  height: 300px;
  padding: 2rem 0 1.5rem 0;
  border-radius: .75rem;
  text-align: center;
  overflow: hidden;
}


.new__content:hover .new__img{
  transform: translateY(-.5rem);
}

.flecha{
  margin-left: 27rem;
}
/*=============== NEWSLETTER ===============*/
.newsletter__description{
  text-align: center;
  margin-bottom: var(--mb-1-5);
}

.newsletter__form{
  background: var(--container-color);
  padding: 1rem;
  display: flex;
  justify-content: space-between;
  border-radius: .75rem;
}

.newsletter__input{
  width: 70%;
  padding: 0 .5rem;
  background: none;
  color: var(--title-color);
}

.newsletter__input::placeholder{
  color: var(--text-color);
}

/*=============== FOOTER ===============*/
.footer{
  position: relative;
  overflow: hidden;
}

.footer__img-one,
.footer__img-two{
  position: absolute;
  transition: .3s;
}

.footer__img-one{
  width: 100px;
  top: 6rem;
  right: 5rem;
}

.footer__img-two{
  width: 150px;
  bottom: 4rem;
  right: 4rem;
}

.footer__img-one:hover,
.footer__img-two:hover{
  transform: translateY(-.5rem);
}

.footer__container{
  row-gap: 2rem;
}

.footer__description{
 margin-top: 0rem;
  margin-bottom: var(--mb-2-5);
  left: 150px;
  text-align: center;
}

.footer__description1{
  font-weight: bold;
  margin-top: 15rem;
  margin-bottom: 5px;
  left: 150px;
  text-align: center;
}

.button-add {
    background-color: white;
    color: var(--verdeo);
    border: 2px solid;
     border-color: var(--verdeo); /* Green */
    transition-duration: 0.4s;
    position: center;
   display: inline-block;
  padding: 1rem 1.75rem;
  border-radius: 3rem;
  font-weight: var(--font-medium);
  transition: .3s;
    bottom: 10px;
    white-space: 5rem;
}
  
.button-add:hover {
    background-color: var(--verdeo); /* Green */
    color: white;
}

button {
    font-size: 16px;
    text-align: center;
    border-radius: 45px;
    padding: 10px 20px;
}

.footer__title{
  font-size: var(--h3-font-size);
  margin-bottom: var(--mb-1);
}

.footer__links{
  display: grid;
  row-gap: .35rem;
}

.footer__link{
  font-size: var(--small-font-size);
  color: var(--text-color);
  transition: .3s;
}

.footer__link:hover{
  color: var(--title-color);
}

.footer__copy{
  display: block;
  text-align: center;
  font-size: var(--smaller-font-size);
  margin-top: 4.5rem;
}

/*=============== SCROLL UP ===============*/
.scrollup{
  position: fixed;
  background: var(--container-color);
  right: 1rem;
  bottom: -20%;
  display: inline-flex;
  padding: .3rem;
  border-radius: .25rem;
  z-index: var(--z-tooltip);
  opacity: .8;
  transition: .4s;
}

.scrollup__icon{
  font-size: 1.25rem;
  color: var(--title-color);
}

.scrollup:hover{
  background: var(--container-color);
  opacity: 1;
}

/* Show Scroll Up*/
.show-scroll{
  bottom: 3rem;
}

/*=============== SCROLL BAR ===============*/
::-webkit-scrollbar{
  width: 0.6rem;
  background: #413e3e;
}

::-webkit-scrollbar-thumb{
  background: #272525;
  border-radius: .5rem;
}

/*===============  BREAKPOINTS ===============*/
/* For small devices */
@media screen and (max-width: 320px){
  .container{
    margin-left: var(--mb-1);
    margin-right: var(--mb-1);
  }

  .home__img{
    height: 200px;
  }
  .home__buttons{
    flex-direction: column;
    width: max-content;
    row-gap: 1rem;
  }

  .category__container,
  .trick__container{
    grid-template-columns: .8fr;
    justify-content: center;
  }
}

/* For medium devices */
@media screen and (min-width: 576px){
  .about__container{
    grid-template-columns: .8fr;
    justify-content: center;
  }

  .newsletter__container{
    display: grid;
    grid-template-columns: .7fr;
    justify-content: center;
  }
  .newsletter__description{
    padding: 0 3rem;
  }
}

@media screen and (min-width: 991px){
  body{
    margin: 0;
  }

  .section{
    padding: 7px 0 2rem;
    margin: auto;
  }

  .nav{
    height: calc(var(--header-height) + 1.5rem);
  }
  .nav__img,
  .nav__close,
  .nav__toggle{
    display: none;
  }
  .nav__list{
    flex-direction: row;
    column-gap: 3rem;
  }
  .navbar-brand {
    padding-top: var(--bs-navbar-brand-padding-y);
    padding-bottom: var(--bs-navbar-brand-padding-y);
    margin-right: var(--bs-navbar-brand-margin-end);
    font-size: var(--bs-navbar-brand-font-size);
    color: var(--verdeo);
    text-decoration: none;
    white-space: nowrap;
}
  .nav__link{
    text-transform: initial;
    font-weight: initial;
  }

  .home__content{
    padding: 8rem 0 2rem;
    grid-template-columns: repeat(2, 1fr);
    gap: 4rem;
  }
  .home__img{
    height: 300px;
  }
  .swiper-pagination{
    margin-top: var(--mb-2);
  }

  .category__container{
    grid-template-columns: repeat(3, 200px);
    justify-content: center;
  }

  .about__container{
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
  }
  .about__title,
  .about__data{
    text-align: initial;
  }
  .about__img{
    width: 250px;
  }

  .trick__container{
    grid-template-columns: repeat(3, 200px);
    justify-content: center;
    gap: 2rem;
  }

  .discount__container{
    grid-template-columns: repeat(2, max-content);
    justify-content: center;
    align-items: center;
    column-gap: 3rem;
    padding: 3rem 0;
    border-radius: 3rem;
  }
  .discount__img{
    width: 350px;
    order: -1;
  }
  .discount__data{
    padding-right: 6rem;
  }

  .newsletter__container{
    grid-template-columns: .5fr;
  }

  .footer__container{
    justify-items: center;
    column-gap: 1rem;
  }
  .footer__img-two{
    right: initial;
    bottom: 0;
    left: 15%;
  }
}

/* For large devices */
@media screen and (min-width: 992px){
  .container{
    margin-left: auto;
    margin-right: auto;
  }

  .section__title{
    font-size: var(--h1-font-size);
    margin-bottom: 3rem;
  }

  .home__content{
    padding-top: ;
    gap: 3rem;
  }
  .home__group{
    padding-top: 0;
  }
  .home__img{
    height: 400px;
    transform: translateY(-3rem);
  }
  .home__indicator{
    top: initial;
    right: initial;
    bottom: 15%;
    left: 45%;
  }
  .home__indicator::after{
    top: 0;
    height: 75px;
  }
  .home__details-img{
    bottom: 0;
    right: 58%;
  }
  .home__title{
    margin-bottom: var(--mb-1-5);
  }
  .home__description{
    margin-bottom: var(--mb-2-5);
    padding-right: 2rem;
  }

  .category__container{
    column-gap: 8rem;
  }
  .category__img{
    width: 200px;
  }

  .about__container{
    column-gap: 7rem;
  }
  .about__img{
    width: 350px;
  }
  .about__description{
    padding-right: 2rem;
  }

  .trick__container{
    gap: 3.5rem;
  }
  .trick__content{
    border-radius: 1.5rem;
  }
  .trick__img{
    width: 110px;
  }
  .trick__title{
    font-size: var(--h3-font-size);
  }

  .discount__container{
    column-gap: 7rem;
  }

  .new__content{
    width: 310px;
    border-radius: 1rem;
    padding: 2rem 0;
  }
  .new__img,
  .new__subtitle{
    margin-bottom: var(--mb-1);
  }

  .footer__copy{
    margin-top: 6rem;
  }
}
/////////////////pop up////////////////////////

.contenedor article {
  line-height: 28px;
}

.contenedor article h1 {
  font-size: 30px;
  text-align: left;
  padding: 50px 0;
}

.contenedor article p {
  margin-bottom: 20px;
}

.contenedor article .btn-abrir-popup {
  padding: 0 20px;
  margin-bottom: 20px;
  height: 50px;
  line-height: 40px;
  border: none;
  color: #fff;
  background: #5E7DE3;
  border-radius: 3px;
  font-family: 'marshalls', sans-serif;
  font-size: 16px;
  cursor: pointer;
  transition: .3s ease all;
  cursor: pointer;
}

.contenedor article .btn-abrir-popup:hover {
  background: rgba(94,125,227, .9);
}

/* ------------------------- */
/* POPUP */
/* ------------------------- */

.overlay {
  background: rgba(0,0,0,.3);
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  align-items: center;
  justify-content: center;
  display: flex;
  visibility: hidden;
}

.overlay2 {
  background: rgba(0,0,0,.3);
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  align-items: center;
  justify-content: center;
  display: flex;
  visibility: hidden;
}

.overlay.active {
  visibility: visible;
}

.popup {
  background: #F8F8F8;
  box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);
  border-radius: 15px;
  font-family: 'Poppins', sans-serif;
  padding: 20px;
  text-align: center;
  width: 600px;
  
  transition: .3s ease all;
  transform: scale(0.7);
  opacity: 0;
}
.btn-close{
  font-size: 16px;
  line-height: 16px;
  display: block;
  text-align: right;
  transition: .3s ease all;
  color: var(--verdeo);

}
}
.popup .btn-cerrar-popup {
  font-size: 16px;
  line-height: 16px;
  display: block;
  text-align: right;
  transition: .3s ease all;
  color: var(--verdeo);
}

.popup .btn-cerrar-popup:hover {
  color: #000;

}

.popup h3 {
  font-size: 36px;
  font-weight: 600;
  margin-bottom: 10px;
  opacity: 0;
  font-family: 'Poppins', sans-serif;
}

.popup h4 {
  font-size: 26px;
  font-weight: 300;
  margin-bottom: 40px;
  opacity: 0;
  font-family: 'Poppins', sans-serif;
}

.popup form .contenedor-inputs {
  opacity: 0;
  font-family: 'Poppins', sans-serif;
}

.popup form .contenedor-inputs input {
  width: 50%;
  border-radius: .5rem;
  margin-bottom: 20px;
  height: 52px;
  font-size: 18px;
  line-height: 52px;
  text-align: center;
  border: 2px solid var(--verdeo);
  font-family: 'Poppins', sans-serif;
}

.popup form .btn-submit {
  padding: 0 20px;
  height: 40px;
  line-height: 40px;
  border: none;
  color: white;
  background: var(--verdeo);
  border-radius: 3px;
  font-family: 'Poppins', sans-serif;
  font-size: 16px;
  cursor: pointer;
  transition: .3s ease all;
}

.popup form .btn-submit:hover {
  background: var(--verdeo);
}

/* ------------------------- */
/* ANIMACIONES */
/* ------------------------- */
.popup.active { transform: scale(1); opacity: 1; }
.popup.active h3 { animation: entradaTitulo .8s ease .5s forwards; }
.popup.active h4 { animation: entradaSubtitulo .8s ease .5s forwards; }
.popup.active .contenedor-inputs { animation: entradaInputs 1s linear 1s forwards; }

@keyframes entradaTitulo {
  from {
    opacity: 0;
    transform: translateY(-25px);
  }

  to {
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes entradaSubtitulo {
  from {
    opacity: 0;
    transform: translateY(25px);
  }

  to {
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes entradaInputs {
  from { opacity: 0; }
  to { opacity: 1; }
}

@media screen and (min-width: 100px){
  .home__img{
    height: 420px;
  }
  .swiper-pagination{
    margin-top: var(--mb-2-5);
  }
  .footer__img-one{
    width: 120px;
  }
  .footer__img-two{
    width: 180px;
    top: 30%;
    left: -3%;
  }
}

/*=============== IMAGENES CON MOVIMIENTO ===============*/

.work__container {
  row-gap: 2rem;
}

.work__container {
    grid-template-columns: repeat(2, 1fr);
    column-gap: 2rem;
    padding-top: 2rem;
  }
  .work__container {
    grid-template-columns: repeat(3, 1fr);
    column-gap: 2rem;
  }

.work__img {
  box-shadow: 0px 4px 25px rgba(14, 36, 49, 0.15);
  border-radius: .5rem;
  overflow: hidden;
}

.work__img img {
  transition: 1s;
}

.work__img img:hover {
  transform: scale(1.1);
}

.bd-grid {
  max-width: 1024px;
  display: grid;
  margin-left: var(--mb-2);
  margin-right: var(--mb-2);
}

@media screen and (min-width: 992px) {
  .bd-grid {
    margin-left: auto;
    margin-right: auto;
  }

  /*=============== LISTAAA ===============*/

.contenedor2 .info2{
  background: #ffffffd5;
  padding: 20px;
  border-radius: 6px;
  height: 950px;
  grid-column-start: 1;
  grid-column-end: 4;sexo
  box-shadow: 1px 5px 25px rgba(0, 0, 0, 0.45);
}

.contenedor2 .per1{
  
  background-color: rgba(116,97,121,0.3);
  height: 270px;
  display: flex;
  align: center;
  padding: 10px;
  margin: 20px;
}

.img_per{
  width: 250px;
  height: 250px;
  box-shadow: 1px 5px 25px rgba(0, 0, 0, 0.45);
}






  /*=============== CARROUSEL ===============*/

+.slider {
    width: 100%;
}
.slider input {
    display: none;
}
.testimonials {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    min-height: 350px;
    perspective: 1000px;
    overflow: hidden;
}
.testimonials .item {
    top: 0;
    position: absolute;
    box-sizing: border-box;
    background-color: #bcdcc4;
    padding: 30px;
    width: 450px;
    text-align: center;
    transition: transform 0.4s;
    -webkit-transform-style: preserve-3d;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
    user-select: none;
    cursor: pointer;
    border-radius: 1rem;
}
.testimonials .item img {
    width: 100px;
    border-radius: 50%;
    border: 13px solid #014134;
}
.testimonials .item p {
    color: #014134;
}
.testimonials .item h2 {
    font-size: 14px;
}
.dots {
    display: flex;
    justify-content: center;
    align-items: center;
}
.dots label {
    display: block;
    height: 5px;
    width: 5px;
    border-radius: 25rem;
    cursor: pointer;
    background-color: #bcdcc4;
    margin: 7px;
    transition: transform 0.2s, color 0.2s;
}

/* First */
#t-1:checked ~ .dots label[for="t-1"] {
    transform: scale(2);
    background-color: #014134;
}
#t-1:checked ~ .dots label[for="t-2"] {
    transform: scale(1.5);
}
#t-1:checked ~ .testimonials label[for="t-1"] {
    z-index: 4;
}
#t-1:checked ~ .testimonials label[for="t-2"] {
    transform: translateX(300px) translateZ(-90px) rotateY(-15deg);
    z-index: 3;
}
#t-1:checked ~ .testimonials label[for="t-3"] {
    transform: translateX(600px) translateZ(-180px) rotateY(-25deg);
    z-index: 2;
}
#t-1:checked ~ .testimonials label[for="t-4"] {
    transform: translateX(900px) translateZ(-270px) rotateY(-35deg);
    z-index: 1;
}
#t-1:checked ~ .testimonials label[for="t-5"] {
    transform: translateX(1200px) translateZ(-360px) rotateY(-45deg);
}

/* Second */
#t-2:checked ~ .dots label[for="t-1"] {
    transform: scale(1.5);
}
#t-2:checked ~ .dots label[for="t-2"] {
    transform: scale(2);
    background-color: #014134;
}
#t-2:checked ~ .dots label[for="t-3"] {
    transform: scale(1.5);
}
#t-2:checked ~ .testimonials label[for="t-1"] {
    transform: translateX(-300px) translateZ(-90px) rotateY(15deg);
}
#t-2:checked ~ .testimonials label[for="t-2"] {
    z-index: 3;
}
#t-2:checked ~ .testimonials label[for="t-3"] {
    transform: translateX(300px) translateZ(-90px) rotateY(-15deg);
    z-index: 2;
}
#t-2:checked ~ .testimonials label[for="t-4"] {
    transform: translateX(600px) translateZ(-180px) rotateY(-25deg);
    z-index: 1;
}
#t-2:checked ~ .testimonials label[for="t-5"] {
    transform: translateX(900px) translateZ(-270px) rotateY(-35deg);
}

/* Third */
#t-3:checked ~ .dots label[for="t-2"] {
    transform: scale(1.5);
}
#t-3:checked ~ .dots label[for="t-3"] {
    transform: scale(2);
    background-color: #014134;
}
#t-3:checked ~ .dots label[for="t-4"] {
    transform: scale(1.5);
}
#t-3:checked ~ .testimonials label[for="t-1"] {
    transform: translateX(-600px) translateZ(-180px) rotateY(25deg);
}
#t-3:checked ~ .testimonials label[for="t-2"] {
    transform: translateX(-300px) translateZ(-90px) rotateY(15deg);
}
#t-3:checked ~ .testimonials label[for="t-3"] {
    z-index: 3;
}
#t-3:checked ~ .testimonials label[for="t-4"] {
    transform: translateX(300px) translateZ(-90px) rotateY(-15deg);
    z-index: 2;
}
#t-3:checked ~ .testimonials label[for="t-5"] {
    transform: translateX(600px) translateZ(-180px) rotateY(-25deg);
}

/* Fourth */
#t-4:checked ~ .dots label[for="t-3"] {
    transform: scale(1.5);
}
#t-4:checked ~ .dots label[for="t-4"] {
    transform: scale(2);
    background-color: #014134;
}
#t-4:checked ~ .dots label[for="t-5"] {
    transform: scale(1.5);
}
#t-4:checked ~ .testimonials label[for="t-1"] {
    transform: translateX(-900px) translateZ(-270px) rotateY(35deg);
}
#t-4:checked ~ .testimonials label[for="t-2"] {
    transform: translateX(-600px) translateZ(-180px) rotateY(25deg);
}
#t-4:checked ~ .testimonials label[for="t-3"] {
    transform: translateX(-300px) translateZ(-90px) rotateY(15deg);
    z-index: 2;
}
#t-4:checked ~ .testimonials label[for="t-4"] {
    z-index: 3;
}
#t-4:checked ~ .testimonials label[for="t-5"] {
    transform: translateX(300px) translateZ(-90px) rotateY(-15deg);
}

/* Fifth */
#t-5:checked ~ .dots label[for="t-4"] {
    transform: scale(1.5);
}
#t-5:checked ~ .dots label[for="t-5"] {
    transform: scale(2);
    background-color: #014134;
}
#t-5:checked ~ .testimonials label[for="t-1"] {
    transform: translateX(-1200px) translateZ(-360px) rotateY(45deg);
}
#t-5:checked ~ .testimonials label[for="t-2"] {
    transform: translateX(-900px) translateZ(-270px) rotateY(35deg);
    z-index: 1;
}
#t-5:checked ~ .testimonials label[for="t-3"] {
    transform: translateX(-600px) translateZ(-180px) rotateY(25deg);
    z-index: 2;
}
#t-5:checked ~ .testimonials label[for="t-4"] {
    transform: translateX(-300px) translateZ(-90px) rotateY(15deg);
    z-index: 3;
}
#t-5:checked ~ .testimonials label[for="t-5"] {
    z-index: 4;
}

html {
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    text-size-adjust: 100%;
    line-height: 1.4;
}


* {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    color: #404040;
    font-family: 'Poppins', sans-serif;
  --verdeclaro: 135;
  --verdeoscuro:168 ;
  --first-color: hsl(var(--hue), 91%, 54%);
  --first-color-alt: hsl(var(--hue), 91%, 50%);
  --title-color: var(--verdeo);
  --text-color: var(--verdeo);
  --text-color-light: hsl(var(--hue), 4%, 55%);
  --second-color: hsl(var(--verdeclaro), 32%, 80%);
  --verdeo: hsl(var(--verdeoscuro), 97%, 13%);
    --mb-1: 1rem;
}
}

/*=====================================
estilos de la utilidad
Copiar esto
=====================================*/
.seccion-perfil-usuario .perfil-usuario-body,
.seccion-perfil-usuario {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
}

.seccion-perfil-usuario .perfil-usuario-header {
    width: 100%;
    display: flex;
    justify-content: center;
    background: var(--second-color);
    margin-bottom: 1.25rem;
}

.seccion-perfil-usuario .perfil-usuario-portada {
    display: block;
    position: relative;
    width: 90%;
    height: 17rem;
    background: var(--second-color);
    border-radius: 0 0 20px 20px;
    /*
    background-image: url('http://localhost/multimedia/png/user-portada-3.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    */
}

.seccion-perfil-usuario .perfil-usuario-portada .boton-portada {
    position: absolute;
    top: 1rem;
    right: 1rem;
    border: 0;
    border-radius: 8px;
    padding: 12px 25px;
    background-color: rgba(0, 0, 0, .5);
    color: #fff;
    cursor: pointer;
}

.seccion-perfil-usuario .perfil-usuario-portada .boton-portada i {
    margin-right: 1rem;
}

.seccion-perfil-usuario .perfil-usuario-avatar {
    display: flex;
    width: 200px;
    height: 200px;
    align-items: center;
    justify-content: center;
    border: 7px solid #FFFFFF;
    background-color: #DFE5F2;
    border-radius: 50%;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    position: absolute;
    bottom: -40px;
    left: calc(50% - 90px);
    z-index: 1;
}

.seccion-perfil-usuario .perfil-usuario-avatar img {
    width: 100%;
    position: relative;
    border-radius: 50%;
}

.seccion-perfil-usuario .perfil-usuario-avatar .boton-avatar {
    position: absolute;
    left: -2px;
    top: -2px;
    border: 0;
    background-color: #fff;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    width: 45px;
    height: 45px;
    border-radius: 50%;
    cursor: pointer;
}

.seccion-perfil-usuario .perfil-usuario-body {
    width: 70%;
    position: relative;
    max-width: 750px;
}

.seccion-perfil-usuario .perfil-usuario-body .titulo {
    display: block;
    width: 100%;
    font-size: 1.75em;
    margin-bottom: 0.5rem;
}

.seccion-perfil-usuario .perfil-usuario-body .texto {
    color: #848484;
    font-size: 0.95em;
}

.seccion-perfil-usuario .perfil-usuario-footer,
.seccion-perfil-usuario .perfil-usuario-bio {
    display: flex;
    flex-wrap: wrap;
    padding: 1.5rem 2rem;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    background-color: #fff;
    border-radius: 15px;
    width: 100%;
}

.seccion-perfil-usuario .perfil-usuario-bio {
    margin-bottom: 1.25rem;
    text-align: center;
}

.seccion-perfil-usuario .lista-datos {
    width: 50%;
    list-style: none;
}

.seccion-perfil-usuario .lista-datos li {
    padding: 10px 0;
}

.seccion-perfil-usuario .lista-datos li>.icono {
    margin-right: 1rem;
    font-size: 1.2rem;
    vertical-align: middle;
}

.seccion-perfil-usuario .redes-sociales {
    position: absolute;
    right: calc(0px - 50px - 1rem);
    top: 0;
    display: flex;
    flex-direction: column;
}

.seccion-perfil-usuario .redes-sociales .boton-redes {
    border: 0;
    background-color: #fff;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    color: #fff;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    font-size: 1.3rem;
}

.seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
    margin-top: .5rem;
}

.seccion-perfil-usuario .boton-redes.facebook {
    background-color: #5955FF;
}

.seccion-perfil-usuario .boton-redes.twitter {
    background-color: #35E1BF;
}

.seccion-perfil-usuario .boton-redes.instagram {
    background: linear-gradient(45deg, #FF2DFD, #40A7FF);
}

/* adactacion a dispositivos */
@media (max-width: 750px) {
    .seccion-perfil-usuario .lista-datos {
        width: 50%;
    }

    .seccion-perfil-usuario .perfil-usuario-portada,
    .seccion-perfil-usuario .perfil-usuario-body {
        width: 95%;
    }

    .seccion-perfil-usuario .redes-sociales {
        position: relative;
        flex-direction: row;
        width: 100%;
        left: 0;
        text-align: center;
        margin-top: 1rem;
        margin-bottom: 1rem;
        align-items: center;
        justify-content: center
    }

    .seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
        margin-left: 1rem;
        margin-top: 0;
    }
}



</style>
    <!--==========================
=            html            =
===========================-->
    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="data:image/jpg;base64,<?php echo base64_encode($row['foto']) ?>" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <i class="far fa-image"></i>
                    </button>
                </div>
                
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo"></h3>
    
                
                
            </div>
            </div>
        </div>
                <div class="perfil-usuario-footer" style="width: 40rem;">
                <ul class="lista-datos">
                    <li><i class="icono fas fa-briefcase"></i> Zona/barrio: <?php echo $row["barrio"]?></li>
                   
                    <li><i class="icono fas fa-map-signs"></i> Edad: <?php echo $row["edad"]?></li>
                    <li><i class="icono fas fa-briefcase"></i> Tamaño: <?php echo $row["tamanio"]?></li>
                    <li><i class="icono fas fa-briefcase"></i> Sexo: <?php echo $row["edad"]?></li>
                    <li><i class="icono fas fa-phone-alt"></i> Especie: <?php echo $row["especie"]?></li>
                    <li><i class="icono fas fa-briefcase"></i> Vacunas: <?php echo $row["cuales_vacunas"]?></li>
          
                    <li><i class="icono fas fa-briefcase"></i> Enfermedades: <?php echo $row["cuales_problemas"]?></li>
                   
                    <li><i class="icono fas fa-briefcase"></i> Obsevaciones: <?php echo $row["observacion"]?></li>
                    <br></br>
                    
                  <div><BUTTON style="padding: 15px; width: 15rem;" id="btn-abrir-popup" CLASS= "btn"> Datos de contacto </BUTTON> </div>
                    
                    
                    
                    
                </ul>
            </div>
            <br></br>
  
            <div style="padding: 15px;"><a href="adoptar-lista-log.php"><BUTTON CLASS= "btn"> Volver </BUTTON></a></div>


<div class="overlay" id="overlay">
            <div class="popup" id="popup">
               <a href="#" id="btn-cerrar-popup" type="button" class="btn-close" aria-label="Close"></a>
                <h3><?php echo $row["username"]?></h3>

                    <p>Mail: <a class="Email" href="valentinabaldomar04@gmail.com">ejemplomail </a></p>
                    <p>Teléfono: <a class="number" href="valentinabaldomar04@gmail.com">ejemplonumero </a></p>
                </form>
            </div>
        </div>
    </div>



    <script src="popup.js"></script>
         <body class="p-3 m-0 border-0 bd-example">

    <!-- Example Code -->
    
   
    </section>
    <!--====  End of html  ====-->
<script src="assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<!--====  End of tarjeta  ====-->
</body>

</html>