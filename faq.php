<?php
    session_start();
    require('./src/srv/core/start.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Arma Tu Plato.cl | Preguntas Frecuentes</title>
        <meta charset="utf-8">
        <?php
            require("./src/srv/views/header.php");
        ?>
    </head>
    <body id="page5">
        <header>
            <div class="row-top">
                <div class="main">
                    <div>
                        <?php
                            require("./src/srv/views/barra-superior-usuario.php");
                        ?>
                    </div>
                    <div class="wrapper">
                        <h1><a href="index.php">ArmaTuPlato . cl<span></span></a></h1>
                        <nav>
                            <ul class="menu">
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="menu.php">Precios</a></li>
                                <li><a href="catalogue.php">Catalogo</a></li>
                                <li><a href="shipping.php">Costos de Envios</a></li>
                                <li><a class="active" href="faq.php">Preguntas Frecuentes</a></li>
                                <li><a href="contact.php">Contacto</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row-bot">
                <div class="row-bot-bg">
                    <div class="main">
                        <h2>Tu Plato a Pedido <span>En Cualquier Momento</span></h2>
                    </div>
                </div>
            </div>
        </header>
        <!--==============================content================================-->
        <section id="content">
            <div class="main">
                <div class="container">
                    <h3>Preguntas Frecuentes</h3>
                    <ul class="list-1">
                        <li> <a href="#"><strong>Medios de Pago</strong></a> <span>Explicacion </span> </li>
                        <li> <a href="#"><strong>Costos de envio</strong></a> <span>Explicacion</span> </li>
                        <li> <a href="#"><strong>Como armo mi plato</strong></a> <span>Explicacion.</span> </li>
                        <li> <a href="#"><strong>Cual es el radio de entrega</strong></a> <span>Explicacion</span> </li>
                        <li> <a href="#"><strong>Horarios de atencion</strong></a> <span>Explicacion </span> </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--==============================footer=================================-->
        <footer>
            <div class="main">
                <div class="aligncenter"> </div>
            </div>
        </footer>
        <script type="text/javascript">Cufon.now();</script>
    </body>
</html>
