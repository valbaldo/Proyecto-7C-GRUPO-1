<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        

        <title>Buscando Huellitas</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Buscando Huellitas</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Inicio</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">Buscador de mascotas</a></li>
                      
                        <li class="nav__item"><a href="assets/php/cerrarSesion.php" class="nav__link">Cerrar sesión</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
        
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Buscando<br><span class="home__title-color">Huellitas</span><br></h1>

                    <a href="#" class="button">Registrar mascota desaparecida</a>
                </div>

                <div class="home__social">
                    <a href="" class="home__social-icon"><i class=''></i></a>
                    <a href="" class="home__social-icon"><i class='' ></i></a>
                    <a href="" class="home__social-icon"><i class='' ></i></a>
                </div>

                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        
                       
                            <image class="home__blob-img" x="50" y="60" href="assets/img/perfil.png"/>
                        </g>
                    </svg>
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">¿Quienes somos?</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/about.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">¿Quienes somos?</h2>
                        <p class="about__text">Somos un grupo de personas que comparten un gran amor por los animales y por lo tanto buscamos su bienestar, de esto surge nuestra pagina. Sabemos que existen muchas agrupaciones y personas dedicadas al rescate animal.  Buscando Huellitas no pretende ser una de ellas, sino ser una herramienta para ellas, recibiendo reportes de mascotas que se han perdido o los ha encontrado alguien y vincular a estas personas entre sí.

​</p>           
                    </div>                                   
                </div>
            </section>

           
            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Work</h2>

                <div class="work__container bd-grid">
                    <a href="" class="work__img">
                        <img src="assets/img/work1.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work2.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work3.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work4.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work5.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work6.jpg" alt="">
                    </a>
                </div>
            </section>

            

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Buscando Huellitas</p>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p class="footer__copy">&#169; Bedimcode. All rigths reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
