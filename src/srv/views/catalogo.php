<?php

$productos = $q->s("SELECT * FROM producto WHERE habilitado = 1;");
foreach ($productos as $producto) {
    echo var_dump($producto);
}
?>