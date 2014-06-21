<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}
require('./src/srv/core/start.php');
if (isset($_GET['agregarplato'])) {
    if ((int) $_GET['agregarplato'] === 1) {
        $id = 0;
        $l = count($_SESSION['carro']);
        for ($x = 0; $x < $l; $x++) {
            $_SESSION['carro'][$x]['plato']['activo'] = false;
            $id = $_SESSION['carro'][$x]['plato']['id'];
        }
        $_SESSION['carro'][] = array(
            'plato' => array(
                "id" => ++$id,
                "nombre" => "plato $id",
                "productos" => array(),
                "activo" => true
            )
        );
    } else {
        header('Location: platos.php');
    }
}
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
                    <h1 class="h1">Mis platos</h1>
                    <?php
                    $totalPlatos = 0;
                    foreach ($_SESSION['carro'] as $plato) {
                        $total = 0;
                        ?>
                        <ul class="ul">
                            <li>Plato <strong><?= $plato['plato']['nombre'] ?></strong> <?= ($plato['plato']['activo'] ? '(Activo)' : '') ?></li>
                            <ul class="ul">
                                <?php
                                foreach ($plato['plato']['productos'] as $producto) {
                                    $total += (int) $producto['precio'];
                                    ?>
                                    <li><?= $producto['nombre'] ?> ($<?= $producto['precio'] ?>) <a href="?retirar=<?= $producto['id'] ?>">Retirar</a></li>
                                    <?php
                                }
                                ?>
                                <li><strong>Total Plato: $<?= $total ?></strong></li>
                            </ul>
                        </ul>
                        <?php
                        $totalPlatos += $total;
                    }
                    ?>
                    <a href="?agregarplato=1">Agregar Nuevo Plato</a>
                    <br/>
                    <h1 class="h1">Total del pedido: <strong>$<?= $totalPlatos; ?></strong></h1>
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
