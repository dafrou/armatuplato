<?php
    session_start();
    require('./src/srv/core/start.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Arma Tu Plato.cl | Precios</title>
        <meta charset="utf-8">
        <?php
            require("./src/srv/views/header.php");
        ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#slider').bxSlider({
                    pager: true,
                    controls: false,
                    moveSlideQty: 1,
                    displaySlideQty: 3
                });
            });
        </script>
        <!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
    </head>
    <body id="page2">
        <!--==============================header=================================-->
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
                                <li><a class="active" href="menu.php">Precios</a></li>
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
                        <div class="indent-left">
                            <div class="img-indent-bot">
                                <h3 class="prev-indent-bot">Oferta Especial</h3>
                                <div class="wrapper img-indent-bot">
                                    <figure class="img-indent"><img src="src/images/page2-img1.jpg" alt=""></figure>
                                    <div class="extra-wrap">
                                        <h5>Exquisito Plato preparado.</h5>
                                        Aprobecha el descuento en nuestro plato de la semana. </div>
                                </div>

                                <h3 class="p1">Nuestras mejores ofertas</h3>
                                <div id="slider">
                                    <div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img2.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img5.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <figure><a href="#"><img src="src/images/page2-img8.jpg" alt=""></a></figure>
                                        <h5>Difruta nuestras Ofertas</h5>
                                        (precio $12.95) </div>
                                    <div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img3.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img6.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <figure><a href="#"><img src="src/images/page2-img9.jpg" alt=""></a></figure>
                                        <h5>Difruta nuestras Ofertas</h5>
                                        (precio $12.95) </div>
                                    <div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img4.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img7.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <figure><a href="#"><img src="src/images/page2-img10.jpg" alt=""></a></figure>
                                        <h5>Difruta nuestras Ofertas</h5>
                                        (precio $12.95) </div>
                                    <div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img2.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img5.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <figure><a href="#"><img src="src/images/page2-img8.jpg" alt=""></a></figure>
                                        <h5>Difruta nuestras Ofertas</h5>
                                        (precio $12.95) </div>
                                    <div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img3.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img6.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <figure><a href="#"><img src="src/images/page2-img9.jpg" alt=""></a></figure>
                                        <h5>Difruta nuestras Ofertas</h5>
                                        (precio $12.95) </div>
                                    <div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img4.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img7.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <figure><a href="#"><img src="src/images/page2-img10.jpg" alt=""></a></figure>
                                        <h5>Difruta nuestras Ofertas</h5>
                                        (precio $12.95) </div>
                                    <div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img2.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img5.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <figure><a href="#"><img src="src/images/page2-img8.jpg" alt=""></a></figure>
                                        <h5>Difruta nuestras Ofertas</h5>
                                        (precio $12.95) </div>
                                    <div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img3.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img6.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <figure><a href="#"><img src="src/images/page2-img9.jpg" alt=""></a></figure>
                                        <h5>Difruta nuestras Ofertas</h5>
                                        (precio $12.95) </div>
                                    <div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img4.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img7.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <figure><a href="#"><img src="src/images/page2-img10.jpg" alt=""></a></figure>
                                        <h5>Difruta nuestras Ofertas</h5>
                                        (precio $12.95) </div>
                                    <div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img4.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <div class="p2">
                                            <figure><a href="#"><img src="src/images/page2-img7.jpg" alt=""></a></figure>
                                            <h5>Difruta nuestras Ofertas</h5>
                                            (precio $12.95) </div>
                                        <figure><a href="#"><img src="src/images/page2-img10.jpg" alt=""></a></figure>
                                        <h5>Difruta nuestras Ofertas</h5>
                                        (precio $12.95) </div>
                                </div>
                            </div>
                    </article>
                    <article class="col-2"/>
                    <h3>Lista de Precio</h3>
                    <ul class="precio-list p2">

                    </ul>
                </div>
            </div>
        </section>
        <!--==============================footer=================================-->
        <footer>
            <div class="main">
                <div class="aligncenter"></div> 
            </div>
        </footer>
        <script type="text/javascript">Cufon.now();</script>
    </body>
</html>
