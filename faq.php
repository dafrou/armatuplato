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
                        <li> <a href="#"><strong>Medios de Pago</strong></a> <span>Pago en efectivo: al recibir su pedido usted cancela segun el valor del o los platos creados, el pago se realizara directamente con nuestro repartidor o en nuestro local segun corresponda, los conceptos de propina quedan sujetos a su criterio.<br><br>
                                                                                   Red compra: al recibir su pedido usted cancela segun el valor del o los platos creados, el pago se realizara directamente con nuestro repartidor o en nuestro local segun corresponda, los conceptos de propina quedan sujetos a su criterio. Ademas se les recuerda que el ingreso de clave de transaccion es de exclusiva digitacion del cliente.<br><br>
                                                                                   Pago con cargo a tarjeta de credito: al recibir su pedido usted cancela segun el valor del o los platos creados, el pago se realizara directamente con nuestro repartidor o en nuestro local según corresponda, los conceptos de propina quedan sujetos a su criterio. Ademas se les recuerda que el ingreso de clave de transaccion es de exclusiva digitacion del cliente.<br><br>
                                                                                   PayPal: al momento de realizar el pedido en nuestro carrito de compras, usted podra cancelar su pedido a traves de paypal, previo a esto usted debera ser un usuario registrado en nuestro sitio para registrarse en nuestro sitio <a href="registro.php">presione aqui</a>.</span> </li>
                        <li> <a href="#"><strong>Costos de envio</strong></a> <span>Los costos de envio estan asociados y explicados en nuestro mismo sitio web, podras encontrar un detalle <a href="shipping.php"> Aqui</a></span> </li>
                        <li> <a href="#"><strong>Como armo mi plato</strong></a> <span>La primera instancia es registrarse en nuestro sitio, una vez registrado podras agregar productos a tu carro de compras, en nuestro carro de compras siempre habra un plato activo en el cual podras agregar tus productos según tus preferencias. Nuestro carro ofrece la posibilidad de crear varios platos a la vez y ser cargados al usuario que se registro</span> </li>
                        <li> <a href="#"><strong>Cual es el radio de entrega</strong></a> <span>Nuestro radio de entrega comprende las siguientes comunas <br> Las condes <br> Providencia </span> </li>
                        <li> <a href="#"><strong>Horarios de atencion</strong></a> <span>De lunes a Jueves de 10:30 horas hasta las 22:30 horas <br> De viernes a Sabado de 11:00 horas hasta las 23:30 horas<br>Domingos y festivos de 11:00 horas a 21:00 horas </span> </li>
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
