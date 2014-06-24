<?php
session_start();
require('./src/srv/core/start.php');
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}
//obtener el total del carro
foreach ($_SESSION['carro'] as $plato) {
    $total = 0;
    foreach ($plato['plato']['productos'] as $producto) {
        $total += (int) $producto['precio'];
    }
}
//si el total del plato es cero, no tiene productos, que vaya a buscar
if ($total === 0) {
    header('Location: catalogue.php');
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <?php
        require("./src/srv/views/header.php");
        ?>
    </head>
    <body id="page7">
        <!--==============================header=================================-->
        <header>
            <div class="row-top">
                <div class="main">
                    <div class="wrapper">
                        <br />
                        <br />
                        <h1><a href="index.html">ArmaTuPlato . cl<span></span></a></h1>
                        <nav>
                            <ul class="menu">
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="menu.php">Precios</a></li>
                                <li><a href="catalogue.php">Catalogo</a></li>
                                <li><a href="shipping.php">Costos de Envios</a></li>
                                <li><a href="faq.php">Preguntas Frecuentes</a></li>
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
                <div class="wrapper">
                    <article class="col-1">       
                    </article>
                    <article class="col-2">
                        <h3 class="p1">Gracias por su compra</h3>
                        <?php
                        if (isset($errores) && count($errores) > 0) {
                            foreach ($errores as $error) {
                                echo "<p>$error</p>";
                            }
                        }
                        ?>
                        <h4>Total del pedido $<strong><?= $total ?></strong></h4>
                        <form id="contact-form" action="" method="post">
                            <fieldset>
                                <h4>Venta realizada con exito</h4>
                                <div class="wrapper">
                                    <br/>                             
                                    <h6 class="p2">Nuestros tiempos de envio son de 1 hora aproximadamente</h6> 
                                    <br>                            
                                    <a href="logout.php">Cerrar Sesión</a>
                                </div>
                            </fieldset>
                        </form>
                    </article>
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
        <div align=center></div>

    </body>
</html>
