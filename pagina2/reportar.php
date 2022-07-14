<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">


        <!--=============== SWIPER CSS ===============--> 
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============--> 
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Buscando Huellitas</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="assets/img/logo.png" alt="" class="nav__logo-img">
                    Buscando Huellitas
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Inicio</a>
                        </li>

                        <li class="nav__item">
                            <a href="#new" class="nav__link">Mascotas desaparecidas</a>
                        </li>

                        <a href="login.html" class="buttonsoporte button--ghost">Soporte</a>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <img src="assets/img/nav-img.png" alt="" class="nav__img">
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>

            </nav>
        </header>

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
                                    <p class="home__description">Somos un grupo de personas que comparten un gran amor por los animales y por lo tanto buscamos su bienestar, de esto surge nuestra pagina. Sabemos que existen muchas agrupaciones y personas dedicadas al rescate animal.  Buscando Huellitas no pretende ser una de ellas, sino ser una herramienta para ellas, recibiendo reportes de mascotas que se han perdido o los ha encontrado alguien y vincular a estas personas entre sí.
                                    </p>
                                </div>
                            </div>
                        </section>

           

            <!--==================== NEW ARRIVALS ====================-->
            <section class="section new" id="new">
                <h2 class="section__title">Mascotas desaparecidas</h2>

                <div class="work__container bd-grid">
                    <a href="" class="work__img">
                        <img src="assets/img/mascota1.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/mascota2.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/mascota3.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/mascota4.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/mascota5.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/mascota6.jpg" alt="">
                    </a>
                </div>
            </section>

            <!--==================== OUR NEWSLETTER ====================-->
            <section class="section newsletter">
               
            <div class="content centered-elements">
                <button class="btn btn--1">
                Buscar mascota desaparecida</button>
                <button href="login.html" class="btn btn--1" >
                    <a href="login.html">Reportar mascota desaparecida</a>
                </button>
            </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
            <footer class="footer section">
                <div class="footer__container container grid">
                    <div class="footer__content">
                        <p class="footer__description1">Buscando Huellitas</p>
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
    </body>
</html>