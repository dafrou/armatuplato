<?php
if (isset($_SESSION['user'])) {
    ?>
    <h1>Bienvenido usuario <?= $_SESSION['user']['correo'] ?></h1> - <a href="logout.php">Cerrar Sesión</a>
    <?php
} else {
    ?>
    <div class="text-right">
        <a href="login.php">Iniciar sesión</a>
    </div>
    <?php
}
?>