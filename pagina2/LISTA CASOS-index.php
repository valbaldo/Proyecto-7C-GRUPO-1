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

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!--=============== SWIPER CSS ===============--> 
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============--> 
        <link rel="stylesheet" href="assets/css/styles - copia.css">

        <!--=============== CSS CARROUSEL ===============--> 
        <link rel="stylesheet" href="assets/css/carrousel.css">


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
                               <li class="nav__item">
                            <a href="#options" class="nav__link">Adoptar</a>
                        </li>
                        </li>

                        <a href="login-buscar.html" class="loginboton">
                            <img src="assets/img/icons8-usuario-de-género-neutro-32.png">
                        </a>
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
           <div>
           </div>
           <div class="page-content">
            <?php
            $resultado=mysqli_query($conexion, $usuarios);
            while($row=mysqli_fetch_assoc($resultado)){
            ?>
                <div class="product-container">
                    <h3><?php echo $row["nombre_mascota"]?></h3>
                    <img class="fotos" src="images/product-1.jpg" />
                    <h1>Localidad: </h1>
            
                    <button class="button-add" onclick="add('product-1', 50)">Ver mas</button>
                </div>
            <?php
            }
            ?>

        <div class="product-container">
            <h3>Nombre Mascota</h3>
            <img class="fotos" src="images/product-2.jpg" />
            <h1>Localidad:</h1>
            <button class="button-add" onclick="add('product-2', 300)">Ver mas</button>
        </div>

        <div class="product-container">
            <h3>Nombre Mascota</h3>
            <img class="fotos" src="images/product-3.jpg" />
            <h1>Localidad:</h1>
            <button class="button-add" onclick="add('product-3', 250)">Ver mas</button>
        </div>

        <div class="product-container">
            <h3>Nombre Mascota</h3>
            <img class="fotos" src="images/product-4.jpg" />
            <h1>Localidad:</h1>
            <button class="button-add" onclick="add('product-4', 200)">Ver mas</button>
        </div>

        <div class="product-container">
            <h3>Nombre Mascota</h3>
            <img class="fotos" src="images/product-5.jpg" />
            <h1>Localidad:</h1>
            <button class="button-add" onclick="add('product-5', 10)">Ver mas</button>
        </div>

        <div class="product-container">
            <h3>Nombre Mascota</h3>
            <img class="fotos" src="images/product-6.jpg" />
            <h1>Localidad:</h1>
            <button class="button-add" onclick="add('product-6', 650)">Ver mas</button>
        </div>
    </div>
</body>
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