<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ROUTE; ?>css/normalize.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="<?php echo ROUTE; ?>css/style.css">
    <title>Blog</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="<?php echo ROUTE; ?>">Mi primer blog</a></p>
            </div>

            <div class="derecha">
                <form name="busqueda" class="buscar" action="<?php echo ROUTE; ?>buscar.php" method="get">
                    <input type="text" name="busqueda" id="" placeholder="Buscar">
                    <button type="submit" class="icono uil uil-search"></button>
                </form>
                <nav class="menu">
                    <ul>
                        <li><a target="_blank" href="https://twitter.com/NathScrapps"><i class="uil uil-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/natanael.corona.hh"><i class="uil uil-facebook-f"></i></a></li>
                        <li><a href="#">Contacto<i class="icono uil uil-envelope"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>