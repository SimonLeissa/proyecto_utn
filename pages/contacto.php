<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"  rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Simara</title>
</head>
<body>
    <div class="arriba">
        <header class="arriba_header">
            <h1 class="arriba_header_titulo">Simara </h1>
                <div class="arriba_header_imagen">
                    <img class="arriba_header_logo" src="../imagenes/logo/logo.jpg" alt="">
                </div>
        </header>
    <section class="color-nav">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#">Sale</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#">Nuevos Ingresos</a>
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

    <section class="contacto_contenido">
        <form action="enviar_consulta.php" method="post" >

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="contacto_input">

            <label for="apellido"> Apellido:</label>
            <input type="text" name="apellido" class="contacto_input">

            <label for="correo"> Correo:</label>
            <input type="text" name="correo" class="contacto_input">

            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="" class="contacto_input" cols="30" rows="10"></textarea>


            <input type="submit" value="Enviar Consulta" class="contacto_btn">

            <?php 
            if(isset($_GET["ok"]))
            echo "<h3> Su mensaje ha sido enviado con exito</h3>"

            ?>

        </form>
    </section>
</main>



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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</body>
</html>