<?php
session_start();
require('./src/srv/core/start.php');
if (isset($_GET['id'])) {
    if (isset($_SESSION['user'])) {
        $errores = array();
        if ((int) $_GET['id'] !== 0) {
            if ((int) $q->one("SELECT COUNT(*) FROM producto WHERE id = {$_GET['id']};") !== 1) {
                $errores[] = "No se ha encontrado el producto solicitado.";
            } else {
                $l = count($_SESSION['carro']);
                for ($x = 0; $x < $l; $x++) {
                    if ($_SESSION['carro'][$x]['plato']['activo']) {
                        $_SESSION['carro'][$x]['plato']['productos'][] = $q->row("SELECT * FROM producto WHERE id = {$_GET['id']};");
                    }
                }
            }
            header('Location: catalogue.php');
        } else {
            header('Location: catalogue.php');
        }
    } else {
        header('Location: login.php');
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Arma Tu Plato.cl | Catalogo</title>
        <meta charset="utf-8">
        <?php
        require("./src/srv/views/header.php");
        ?>
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
    </head>
    <body id="page3">
        <!--==============================header=================================-->
        <header>
            <div class="row-top">
                <div class="main">
                    <div class="wrapper">
                        <div>
                            <?php
                            require("./src/srv/views/barra-superior-usuario.php");
                            ?>
                        </div>
                        <h1><a href="index.php">ArmaTuPlato . cl<span></span></a></h1>
                        <nav>
                            <ul class="menu">
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="menu.php">Precios</a></li>
                                <li><a class="active" href="catalogue.php">Catalogo</a></li>
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
                    <div>
                        <?php
                        require("./src/srv/views/catalogo.php");
                        ?>
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
