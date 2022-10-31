<?php
    include("assets/php/cn.php");
    $usuarios="SELECT * FROM perdidos";
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== SWIPER CSS ===============--> 
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============--> 
        <link rel="stylesheet" href="assets/css/styles.css">

        <!--=============== CSS CARROUSEL ===============--> 
        <link rel="stylesheet" href="assets/css/carrousel.css">


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
              Usuario
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Mi cuenta</a></li>
              <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
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
                <li><a class="dropdown-item" href="report/report.php">Reportar mascota</a></li>
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
                <li><a class="dropdown-item" href="adoptar-lista-log.php">Adoptar</a></li>
                <li><a class="dropdown-item" href="#" id="btn-abrir-popup2">Dar en adopcion</a></li>
                    <div class="overlay" id="overlay2">
                    <div class="popup" id="popup2">
                    <a href="#" id="btn-cerrar-popup2" type="button" class="btn-close" aria-label="Close"></a>
                    <h3>Iniciar sesión</h3>
                    <form action="assets/php/login/login-index-adoptar.php" method="POST">
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

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home container" id="home">
                <div class="swiper home-swiper">
                    <div class="swiper-wrapper">
                        <!-- HOME SLIDER 1 -->
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="assets/img/home1-img.png" alt="" class="home__img">
                                </div>
    
                                <div class="home__data">
                                    <h3 class="home__subtitle"></h3>
                                    <h1 class="home__title">Buscando<br> Huellitas <br></h1>
                                    <p class="home__description">Somos un grupo de personas que comparten un gran amor por los animales y por lo tanto buscamos su bienestar, de esto surge nuestra pagina. Sabemos que existen muchas agrupaciones y personas dedicadas al rescate animal.  Buscando Huellitas no pretende ser una de ellas, sino ser una herramienta para ellas, recibiendo reportes de mascotas que se han perdido o permitir dar en adopcion y vincular a los dueños y el adoptante/rescatista entre sí.
                                    </p>
                                </div>
                            </div>
                        </section>

           

            <!--==================== NEW ARRIVALS ====================-->
                   
<section class="home container" id="new">
    <div class="content centered-elements">
                    <h2>Mascotas desaparecidas</h2>
                </div>
            <div class="slider">
        <input type="radio" name="testimonial" id="t-1">
        <input type="radio" name="testimonial" id="t-2">
        <input type="radio" name="testimonial" id="t-3" checked>
        <input type="radio" name="testimonial" id="t-4">
        <input type="radio" name="testimonial" id="t-5">
        <div class="testimonials">
            <label class="item" for="t-1">
                <img src="https://dummyimage.com/150" alt="picture">
                <p>"Raw denim you probably haven't heard of them jean short austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse."</p>
                <h2>- Princy, Web Developer</h2>
            </label>
            <label class="item" for="t-2">
                <img src="https://dummyimage.com/150" alt="picture">
                <p>"Raw denim you probably haven't heard of them jean short austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse."</p>
                <h2>- Princy, Web Developer</h2>
            </label>
            <label class="item" for="t-3">
                <img src="https://dummyimage.com/150" alt="picture">
                <p>"Raw denim you probably haven't heard of them jean short austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse."</p>
                <h2>- Princy, Web Developer</h2>
            </label>
            <label class="item" for="t-4">
                <img src="https://dummyimage.com/150" alt="picture">
                <p>"Raw denim you probably haven't heard of them jean short austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse."</p>
                <h2>- Princy, Web Developer</h2>
            </label>
            <label class="item" for="t-5">
                <img src="https://dummyimage.com/150" alt="picture">
                <p>"Raw denim you probably haven't heard of them jean short austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse."</p>
                <h2>- Princy, Web Developer</h2>
            </label>
        </div>
        <div class="dots">
            <label for="t-1"></label>
            <label for="t-2"></label>
            <label for="t-3"></label>
            <label for="t-4"></label>
            <label for="t-5"></label>
        </div>
    </div>

            <!--==================== OUR NEWSLETTER ====================-->
            
        <!--==================== FOOTER ====================-->
            <footer class="footer section">
                <div class="footer__container container grid">
                    <div class="footer__content">
                        <p class="footer__description1">Buscando Huellitas © 2022</p>

                        <p class="footer__description">Busca, encontra y adopta.</p>
                    </div>
                    </div>
                    
                <img src="assets/img/footer2.png" alt="" class="footer__img-one">
                <img src="assets/img/footer1.png" alt="" class="footer__img-two">
            </footer>

            <!--=============== SCROLL UP ===============-->
            <a href="#" class="scrollup" id="scroll-up">
                <i class='bx bx-up-arrow-alt scrollup__icon'></i>
            </a>
        
        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>