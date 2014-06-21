<?php
session_start();
require('./src/srv/core/start.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Arma Tu Plato.cl | Contacto</title>
        <meta charset="utf-8">
        <?php
        require("./src/srv/views/header.php");
        ?>
    </head>
    <body id="page6">
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
                                <li><a href="shipping.php">Costos de Envios</a></li>
                                <li><a href="faq.php">Preguntas Frecuentes</a></li>
                                <li><a class="active" href="contact.php">Contacto</a></li>
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
                            <h3 class="p1">Contactanos</h3>
                            <figure class="indent-bot">
                                <iframe width="240" height="180" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.3095257287364!2d-70.60122419999999!3d-33.415173799999955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf41c998c107%3A0xf8927547ab64e020!2sEl+Bosque+Norte+177!5e0!3m2!1ses!2scl!4v1403325700825" width="600" height="450" frameborder="0" style="border:0"></iframe>
                            </figure>
                            <dl>
                                <dt class="p1">Av El Bosque 0177, Las Condes</dt>
                                <dd><span>Celular:</span>569 78064628</dd>
                                <dd><span>Telefono:</span>02 435000602</dd>
                                <dd><span>Mail:</span><a class="color-2" href="#">contacto@armatuplato.cl</a></dd>
                            </dl>
                        </div>
                    </article>
                    <article class="col-2">
                        <h3 class="p1">Contacto</h3>
                        <form id="contact-form" action="#" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <label><span class="text-form">Nombre:</span>
                                    <input name="name" type="text" />
                                </label>
                                <label><span class="text-form">Mail:</span>
                                    <input name="email" type="text" />
                                </label>
                                <div class="wrapper">
                                    <div class="text-form">Mensaje:</div>
                                    <div class="extra-wrap">
                                        <textarea></textarea>
                                        <div class="clear"></div>
                                        <div class="buttons"> <a class="button-2" href="#">Limpiar</a> <a class="button-2" href="#">Enviar</a> </div>
                                    </div>
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
