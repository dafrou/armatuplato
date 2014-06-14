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
                            <iframe width="610" height="310" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
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
