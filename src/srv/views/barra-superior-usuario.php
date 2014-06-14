<?php
if (isset($_SESSION['user'])) {
    ?>
    <h1>Bienvenido usuario</h1>
    <?php
} else {
    ?>
    <div class="text-right">
        <a href="login.php">Iniciar sesión</a>
    </div>
    <?php
}
?>