<?php
    require('./src/srv/core/start.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Arma Tu Plato.cl | Catalogo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="src/css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="src/css/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="src/css/layout.css" type="text/css" media="screen">
        <script src="src/js/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script src="src/js/cufon-yui.js" type="text/javascript"></script>
        <script src="src/js/cufon-replace.js" type="text/javascript"></script>
        <script src="src/js/Dynalight_400.font.js" type="text/javascript"></script>
        <script src="src/js/FF-cash.js" type="text/javascript"></script>
        <script src="src/js/tms-0.3.js" type="text/javascript"></script>
        <script src="src/js/tms_presets.js" type="text/javascript"></script>
        <script src="src/js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="src/js/jquery.equalheights.js" type="text/javascript"></script>
        <script src="src/js/jquery.bxSlider.js" type="text/javascript"></script>
        <!--[if lt IE 9]><script type="text/javascript" src="src/js/html5.js"></script><![endif]-->
        <script type="text/javascript">
            $(document).ready(function() {
                $('#slider-2').bxSlider({
                    pager: true,
                    controls: false,
                    moveSlideQty: 1,
                    displaySlideQty: 4
                });
                $("a[data-gal^='prettyPhoto']").prettyPhoto({
                    theme: 'facebook'
                });
            });
        </script>
        <!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
    </head>
    <body id="page3">
        <!--==============================header=================================-->
        <header>
            <div class="row-top">
                <div class="main">
                    <div class="wrapper">
                        <h1><a href="index.html">ArmaTuPlato . cl<span></span></a></h1>
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
                    </div>
                </div>
            </div>
        </header>
        <!--==============================content================================-->
        <section id="content">
            <div class="main">
                <div class="container">
                    <h3 class="prev-indent-bot">Catalogue</h3>
                    <div id="slider-2">
                        <div>
                            <div class="p4">
                                <figure><a class="lightbox-image" href="images/slider-img1.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                        <img src="images/page3-img1.jpg" alt=""></a></figure>
                                <h5>Detalle</h5>
                                <p class="p1">
                                    Pastas
                                </p>
                                <p class="p2"><strong class="color-2">Precio: "por definir"</strong></p>
                                <a class="button-1" href="#">Agregar al carro</a>
                            </div>
                            <figure><a class="lightbox-image" href="images/slider-img2.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                    <img src="images/page3-img5.jpg" alt=""></a></figure>
                            <h5>Detalle </h5>
                            <p class="p1">
                                Postres
                            </p>
                            <p class="p2"><strong class="color-2">Precio: "por definir"</strong></p>
                            <a class="button-1" href="#">Agregar al carro</a>
                        </div>
                        <div>
                            <div class="p4">
                                <figure><a class="lightbox-image" href="images/slider-img3.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                        <img src="images/page3-img2.jpg" alt=""></a></figure>
                                <h5>Detalle</h5>
                                <p class="p1">Detallar</p>
                                <p class="p2"><strong class="color-2">Precio: $9.50</strong></p>
                                <a class="button-1" href="#">Agregar al carro</a>
                            </div>
                            <figure><a class="lightbox-image" href="images/slider-img1.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                    <img src="images/page3-img6.jpg" alt=""></a></figure>
                            <h5>Detalle</h5>
                            <p class="p1">Detallar</p>
                            <p class="p2"><strong class="color-2">Precio: $9.50</strong></p>
                            <a class="button-1" href="#">Agregar al carro</a>
                        </div>
                        <div>
                            <div class="p4">
                                <figure><a class="lightbox-image" href="images/slider-img1.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                        <img src="images/page3-img3.jpg" alt=""></a></figure>
                                <h5>Detalle</h5>
                                <p class="p1">
                                    Detallar

                                </p>
                                <p class="p2"><strong class="color-2">Precio: $15.95</strong></p>
                                <a class="button-1" href="#">Agregar al carro</a>
                            </div>
                            <figure><a class="lightbox-image" href="images/slider-img2.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                    <img src="images/page3-img7.jpg" alt=""></a></figure>
                            <h5>Detalle</h5>
                            <p class="p1">
                                Detallar<br>

                            </p>
                            <p class="p2"><strong class="color-2">Precio: $15.95</strong></p>
                            <a class="button-1" href="#">Agregar al carro</a>
                        </div>
                        <div>
                            <div class="p4">
                                <figure><a class="lightbox-image" href="images/slider-img3.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                        <img src="images/page3-img4.jpg" alt=""></a></figure>
                                <h5>Detalle</h5>
                                <p class="p1">Detallar</p>
                                <p class="p2"><strong class="color-2">Precio: $15.95</strong></p>
                                <a class="button-1" href="#">Agregar al carro</a>
                            </div>
                            <figure><a class="lightbox-image" href="images/slider-img1.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                    <img src="images/page3-img8.jpg" alt=""></a></figure>
                            <h5>Detalle</h5>
                            <p class="p1">Detallar</p>
                            <p class="p2"><strong class="color-2">Precio: $15.95</strong></p>
                            <a class="button-1" href="#">Agregar al carro</a>
                        </div>
                        <div>
                            <div class="p4">
                                <figure><a class="lightbox-image" href="images/slider-img1.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                        <img src="images/page3-img1.jpg" alt=""></a></figure>
                                <h5>Detalle </h5>
                                <p class="p1">
                                    Detallar

                                </p>
                                <p class="p2"><strong class="color-2">Precio: $12.95</strong></p>
                                <a class="button-1" href="#">Agregar al carro</a>
                            </div>
                            <figure><a class="lightbox-image" href="images/slider-img2.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                    <img src="images/page3-img5.jpg" alt=""></a></figure>
                            <h5>Detalle </h5>
                            <p class="p1">
                                Detallar
                            </p>
                            <p class="p2"><strong class="color-2">Precio: $12.95</strong></p>
                            <a class="button-1" href="#">Agregar al carro</a>
                        </div>
                        <div>
                            <div class="p4">
                                <figure><a class="lightbox-image" href="images/slider-img3.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                        <img src="images/page3-img2.jpg" alt=""></a></figure>
                                <h5>Detalle</h5>
                                <p class="p1">Detallar</p>
                                <p class="p2"><strong class="color-2">Precio: $9.50</strong></p>
                                <a class="button-1" href="#">Agregar al carro</a>
                            </div>
                            <figure><a class="lightbox-image" href="images/slider-img1.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                    <img src="images/page3-img6.jpg" alt=""></a></figure>
                            <h5>Detalle</h5>
                            <p class="p1">Detallar</p>
                            <p class="p2"><strong class="color-2">Precio: $9.50</strong></p>
                            <a class="button-1" href="#">Agregar al carro</a>
                        </div>
                        <div>
                            <div class="p4">
                                <figure><a class="lightbox-image" href="images/slider-img1.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                        <img src="images/page3-img3.jpg" alt=""></a></figure>
                                <h5>Detalle</h5>
                                <p class="p1">
                                    Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi<br>
                                    enim ad minim.
                                </p>
                                <p class="p2"><strong class="color-2">Precio: $15.95</strong></p>
                                <a class="button-1" href="#">Agregar al carro</a>
                            </div>
                            <figure><a class="lightbox-image" href="images/slider-img2.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                    <img src="images/page3-img7.jpg" alt=""></a></figure>
                            <h5>Detalle</h5>
                            <p class="p1">
                                Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi<br>
                                enim ad minim.
                            </p>
                            <p class="p2"><strong class="color-2">Precio: $15.95</strong></p>
                            <a class="button-1" href="#">Agregar al carro</a>
                        </div>
                        <div>
                            <div class="p4">
                                <figure><a class="lightbox-image" href="images/slider-img3.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                        <img src="images/page3-img4.jpg" alt=""></a></figure>
                                <h5>Ut wisi enim ad minim veniam</h5>
                                <p class="p1">Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                <p class="p2"><strong class="color-2">Precio: $15.95</strong></p>
                                <a class="button-1" href="#">Agregar al carro</a>
                            </div>
                            <figure><a class="lightbox-image" href="images/slider-img1.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                    <img src="images/page3-img8.jpg" alt=""></a></figure>
                            <h5>Ut wisi enim ad minim veniam</h5>
                            <p class="p1">Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            <p class="p2"><strong class="color-2">Precio: $15.95</strong></p>
                            <a class="button-1" href="#">Agregar al carro</a>
                        </div>
                        <div>
                            <div class="p4">
                                <figure><a class="lightbox-image" href="images/slider-img1.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                        <img src="images/page3-img1.jpg" alt=""></a></figure>
                                <h5>Nam liber tempor cusoluta </h5>
                                <p class="p1">
                                    Nobis eleifend option congue nihil imperdiet doming quod mazim plac<br>
                                    erat facer possim.
                                </p>
                                <p class="p2"><strong class="color-2">Precio: $12.95</strong></p>
                                <a class="button-1" href="#">Agregar al carro</a>
                            </div>
                            <figure><a class="lightbox-image" href="images/slider-img2.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                    <img src="images/page3-img5.jpg" alt=""></a></figure>
                            <h5>Nam liber tempor cusoluta </h5>
                            <p class="p1">
                                Nobis eleifend option congue nihil imperdiet doming quod mazim plac<br>
                                erat facer possim.
                            </p>
                            <p class="p2"><strong class="color-2">Precio: $12.95</strong></p>
                            <a class="button-1" href="#">Agregar al carro</a>
                        </div>
                        <div>
                            <div class="p4">
                                <figure><a class="lightbox-image" href="images/slider-img3.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                        <img src="images/page3-img2.jpg" alt=""></a></figure>
                                <h5>Detalle</h5>
                                <p class="p1">Consectetuer adipiscing elit, Detalle euismod tincidunt ut laoreet dolore magna.</p>
                                <p class="p2"><strong class="color-2">Precio: $9.50</strong></p>
                                <a class="button-1" href="#">Agregar al carro</a>
                            </div>
                            <figure><a class="lightbox-image" href="images/slider-img1.jpg" data-gal="prettyPhoto[prettyPhoto]">
                                    <img src="images/page3-img6.jpg" alt=""></a></figure>
                            <h5>Detalle</h5>
                            <p class="p1">Consectetuer adipiscing elit, Detalle euismod tincidunt ut laoreet dolore magna.</p>
                            <p class="p2"><strong class="color-2">Precio: $9.50</strong></p>
                            <a class="button-1" href="#">Agregar al carro</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==============================footer=================================-->
        <footer>
            <div class="main">
                <div class="aligncenter">  </div>
            </div>
        </footer>
        <script type="text/javascript">Cufon.now();</script>

    </body>
</html>