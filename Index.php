<?php
    session_start();
    require('./src/srv/core/start.php');
?>
<!DOCTYPE html>
<html onload="index.html">
    <head>
        <title>Arma Tu Plato.cl | Index</title>
        <meta charset="utf-8">
        <?php
            require("./src/srv/views/header.php");
        ?>
    </head>
    <body id="page1">
        <!--==============================header=================================-->
        <header>
            <div class="row-top">
                <div class="main">
                    <div>
                        <?php
                            require("barra-superior-login.php");
                        ?>
                    </div>
                    <div class="wrapper">
                        <h1><a href="index.php">ArmaTuPlato . cl<span></span></a></h1>
                        <nav>
                            <ul class="menu">
                                <li><a class="active" href="index.php">Inicio</a></li>
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
                        <div class="slider-wrapper">
                            <div class="slider">
                                <ul class="items">
                                    <li> <img src="images/slider-img1.jpg" alt="" /> </li>
                                    <li> <img src="images/slider-img2.jpg" alt="" /> </li>
                                    <li> <img src="images/slider-img3.jpg" alt="" /> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--==============================content================================-->
        <section id="content">
            <div class="main">
                <div class="wrapper img-indent-bot">
                    <article class="col-1"> <a href="#"><img class="img-border" src="images/banner-1.jpg" alt=""></a> </article>
                    <article class="col-1"> <a href="#"><img class="img-border" src="images/banner-2.jpg" alt=""></a> </article>
                    <article class="col-2"> <a href="#"><img class="img-border" src="images/banner-3.jpg" alt=""></a> </article>
                </div>
                <div class="wrapper">
                    <article class="column-1">
                        <div class="indent-left">
                            <div class="maxheight indent-bot">
                                <h3>Sobre Nuestros Servicios</h3>
                                <ul class="list-1">
                                    <li>Platos a Pedido</li>
                                    <li>Entrega a Domicilio u Oficina</li>
                                    <li>Diversos Medios de Pago</li>
                                    <li>Convenios</li>

                                </ul>
                            </div>
                            <a class="button-1" href="faq.html">Detalle de Servicios</a> </div>
                    </article>
                    <article class="column-2">
                        <div class="maxheight indent-bot">
                            <h3 class="p1">Sobre Nuestros Productos</h3>
                            <h6 class="p2">ArmaTuPlato.Cl se destaca por poseer una variada gama de productos, ofrecemos todo tipo de carnes, acompañamientos y postres. Entregados en forma oportuna y segun preferencias del cliente.</h6>
                            <p class="p2"></p>
                        </div>
                        <a class="button-2" href="catalogue.html">Detalle de Productos</a> </article>
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
        <script type="text/javascript">
            $(window).load(function() {
                $('.slider')._TMS({
                    duration: 500,
                    easing: 'easeOutQuint',
                    preset: 'slideDown',
                    slideshow: 7000,
                    banners: false,
                    pauseOnHover: true,
                    pagination: true,
                    pagNums: false
                });
            });
        </script>
    </body>
</html>
