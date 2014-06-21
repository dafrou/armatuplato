<?php
require ('./src/srv/core/start.php');
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
                        <h3 class="p1">Registrate</h3>
                        
                        <form id="contact-form" action="" method="post">
                            <fieldset>
                                <label><span class="text-form">Mail:</span>
                                    <input name="mail" type="text" />
                                </label>
                                <label><span class="text-form">Contraseña</span>
                                    <input name="pass" type="password" />
                                </label>
                                <div class="wrapper">

                                    <div class="clear"></div>
                                    <div class="buttons">
                                        <button class="button-2" type="reset">Limpiar</button>
                                        <button class="button-2" Registrate type="submit" value="grabar">Grabar</button>
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
