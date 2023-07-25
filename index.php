<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"  rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Simara</title>

</head>
<body>
        <?php

            //variables
            $titulo = "Simara"; 
            $nav_productos = "Productos";
            $nav_nuevosingresos = "Nuevos ingresos";
            $nav_contacto ="Contacto";
            $nav_sobrenosotros ="Sobre Nosotros";
            ?> 
    <div class="arriba">
        <header class="arriba_header">
            <h1 class="arriba_header_titulo"> <?php echo $titulo?> </h1>     
                <div class="arriba_header_imagen">
                    <img class="arriba_header_logo" src="./Imagenes/logo/logo.jpg" alt="">
                </div>
        </header>
    <section class="color-nav">
        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                    <a class="nav-link disabled" aria-current="page" href="#"><?php echo $nav_productos ?></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#"><?php echo $nav_nuevosingresos?> </a>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link" href="./pages/contacto.php"> <?php echo $nav_contacto ?></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="./pages/sobrenosotros.php"> <?php echo $nav_sobrenosotros?> </a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </div>
        </nav>
    </section>       
    </div>
    <main> 
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="3" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner ">
                <div class="carousel-item  active" data-bs-interval="2000">
                    <img src="imagenes/imagenescarousel/buzo2.jpg" class="d-block w-20 mx-auto img-fluid" alt="...">
                </div>
                <div class="carousel-item  " data-bs-interval="2000">
                    <img src="imagenes/imagenescarousel/pantalon.jpg" class="d-block w-20 mx-auto img-fluid" alt="...">
                </div>
                <div class="carousel-item  " data-bs-interval="2000">
                    <img src="imagenes/imagenescarousel/pantalon2.jpg" class="d-block w-20 mx-auto img-fluid" alt="...">
                </div>
                <div class="carousel-item " data-bs-interval="2000">
                    <img src="imagenes/imagenescarousel/pantalon3.jpg" class="d-block w-20 mx-auto img-fluid" alt="...">
                </div>
                <div class="carousel-item " data-bs-interval="2000">
                    <img src="imagenes/imagenescarousel/remera3.jpg" class="d-block w-20 mx-auto img-fluid " alt="...">
                </div>
                <div class="carousel-item " data-bs-interval="2000">
                    <img src="imagenes/imagenescarousel/remera2.jpg" class="d-block w-20 mx-auto img-fluid" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev carousel-control-color: black; " type="button" data-bs-target="#carouselExampleInterval"   data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>

    <section class="gif">

        <img src="./imagenes/gif/lavando-ropa-hora-de-aventura.gif" alt="">
        <p class="gif_texto">Lorem ipsum dolor Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis nihil excepturi possimus adipisci neque. Totam ex sint expedita, repellendus recusandae unde ut dolor laudantium asperiores numquam dolorum animi nam nihil! sit amet consectetur adipisicing elit. Earum quasi optio deleniti sunt aperiam nisi suscipit deserunt odio ipsa cumque! Sapiente culpa commodi consectetur ipsam expedita assumenda optio odio porro.</p>

    </section>

    
    <section class="productos">

        <h2 class="productos_titulo">Productos</h2>
        <section class="productos_galeria">
            <div class="productos_index">
                <div class="buzos">
                    <a href=""><h2>BUZOS</h2></a>
                </div>
            </div>
            <div class="productos_index" >
                <div class="camperas">
                    <a href=""><h2>CAMPERAS</h2></a>
                </div>
            </div>
            <div class="productos_index">
                <div class="remeras">
                    <a href=""><h2>REMERAS</h2></a>
                </div>
            </div>
            
            <div class="productos_index">
                <div class="pantalones">
                    <a href=""><h2>PANTALONES</h2></a>
                </div>
            </div>
            
            <div class="productos_index">
                <div class="zapatillas">
                    <a href=""><h2>ZAPATILLAS</h2></a>
                </div>
            </div>
            
            <div class="productos_index">
                <div class="gorras">
                    <a href=""><h2>GORRAS</h2></a>
                </div>
            </div>
            
            <div class="productos_index">
                <div class="bolsos">
                    <a href=""><H2>BOLSOS</H2></a>
                </div>
            </div>
            
            <div  class="productos_index">
                <div class="medias">
                    <a  href=""><h2>MEDIAS</h2></a>
                </div>
            </div>
        </section>
    </section>

    <footer class="footer">

        <section class="footer_primerafila">
        <div class="contactanos">

            <h2>Contactanos</h2>

            <ul>
                <li class="footer_decoracion">Gmail:Simara@gmail.com</li>
                <li class="footer_decoracion">Whatsapp:3446403759</li>
                <li class="footer_decoracion">Instagram:Simara.vintage</li>
            </ul>

        </div>

        <div class="seguinos">
            <h2>Seguinos</h2>
            <ul>
                <li class="footer_decoracion"><a class="footer_decoracion" href="">Tiktok:Simara</a></li>
                <li class="footer_decoracion"><a class="footer_decoracion" href="">Instagram:Simara</a></li>
            </ul>

        </div>
        </section>
        <div class="lavado">
            <h2><a class="footer_decoracion" href="">Lavado de prendas</a></h2>
        </div>

        <div class="talle">
            <h2><a class="footer_decoracion" href="">Como saber tu talle</a></h2>
        </div>

        <div class="metodosdepago">
            <h2>Metodos de pago</h2>

            <ul>
                <li class="footer_decoracion">Mercado Pago</li>
                <li class="footer_decoracion">Tarjeta de credito</li>
                <li class="footer_decoracion">Tarjeta de debito</li>
                <li class="footer_decoracion">Transferencia bancaria</li>
            </ul>
        </div>

    
    
    </footer>
    
    
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</body>
</html>