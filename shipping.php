<?php
    session_start();
    require('./src/srv/core/start.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Arma Tu Plato.cl | Costos de envio</title>
        <meta charset="utf-8">
        <?php
            require("./src/srv/views/header.php");
        ?>
    </head>
    <body id="page4">
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
                                <li><a href="menu.php">Precios</a></li>
                                <li><a href="catalogue.php">Catalogo</a></li>
                                <li><a class="active" href="shipping.php">Costos de Envios</a></li>
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
                            <div class="p2">
                                <h3 class="p1">Referencias de precios</h3>
                                <dl class="list-2">
                                    <dt><em>Orden</em><span>Precio</span></dt>
                                    <dd><em>1 plato</em><span>$ 2.500</span></dd>
                                    <dd><em>2 platos</em><span>$ 5.000</span></dd>
                                    <dd><em>3 platos</em><span>$ 7.000</span></dd>
                                    <dd><em>4 platos</em><span>$ 9.500</span></dd>
                                    <dd><em>5 platos</em><span>$ 11.000</span></dd>

                                </dl>
                            </div>
                            <h3 class="p1">Standard de entrega</h3>
                            <dl class="list-2">
                                <dt><em>Pedido</em><span>Entregado</span></dt>
                                <dd><em>Lunes</em><span>1 hora</span></dd>
                                <dd><em>Martes</em><span>1 hora</span></dd>
                                <dd><em>Miercoles</em><span>1 hora</span></dd>
                                <dd><em>Jueves</em><span>1 hora</span></dd>
                                <dd><em>Viernes</em><span>1 hora</span></dd>
                                <dd><em>Sabado</em><span>2 horas</span></dd>
                                <dd><em>Domingo</em><span>2 horas</span></dd>
                            </dl>
                        </div>
                    </article>
                    <article class="col-2">
                        <h3 class="p1">Comprar en</h3>
                        <p></p>
                        <figure class="img-indent-bot">
                            <iframe width="610" height="310" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.3095257287364!2d-70.60122419999999!3d-33.415173799999955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf41c998c107%3A0xf8927547ab64e020!2sEl+Bosque+Norte+177!5e0!3m2!1ses!2scl!4v1403325700825" width="600" height="450" frameborder="0" style="border:0"></iframe>
                        </figure>
                        <h3>Consuma en nuestros locales</h3>
                        <h6 class="p2">Disfrute de un comodo ambiente y la mejor antencion entregada en nuestros locales </article>
                </div>
            </div>
        </section>
        <!--==============================footer=================================-->
        <footer>
            <div class="main">

            </div>
        </footer>
        <script type="text/javascript">Cufon.now();</script>
    </body>
</html>
