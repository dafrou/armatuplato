<?php
$productos = $q->s("SELECT * FROM producto WHERE habilitado = 1;");
foreach ($productos as $producto) {
    ?>
    <div>
        <div class="p4">
            <figure>
                <a class="lightbox-image" href="src/images/productos/<?= $producto['foto'] ?>" data-gal="prettyPhoto[prettyPhoto]">
                    <img src="src/images/productos/<?= $producto['foto'] ?>" alt=""></a>
            </figure>
            <h5>Detalle</h5>
            <p class="p1"><?= $producto['nombre'] ?></p>
            <p class="p2"><strong class="color-2">Precio: <?= $producto['precio'] ?></strong></p>
            <a class="button-1" href="#">Agregar al carro</a>
        </div>
    </div>
    <?php
    //echo var_dump($producto);
}
?>