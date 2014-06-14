<?php

if (isset($_SESSION['user'])) {
    header("Location: index.php");
}

//require("../core/Validation.class.php");
//$valida = new Validation();

if (isset($_POST['email'], $_POST['pass'])) {
    $errores = array();
    if (!$valida->validarMail($_POST['email'])) {
        $errores[] = "Correo incorrecto";
    }
    if (count($errores) === 0) {
        $user = $q->row("SELECT * FROM usuario WHERE correo = '{$_POST['email']}' AND contrasena = MD5('{$_POST['pass']}')");
        if ($user === null) {
            $errores[] = "No existe el usuarios";
            session_destroy();
        } else {
            $_SESSION['user'] = $user;
            header("Location: index.php");
        }
    }
}
?>