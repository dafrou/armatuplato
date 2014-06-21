<?php
$productos = $q->s("SELECT * FROM producto WHERE habilitado = 1;");
$x = 1;
echo "<ul class='catalogo'>";
foreach ($productos as $producto) {
    ?>
    <li>
        <figure>
            <a class="lightbox-image" href="src/images/productos/<?= $producto['foto'] ?>" data-gal="prettyPhoto[prettyPhoto]">
                <img src="src/images/productos/<?= $producto['foto'] ?>" alt=""></a>
        </figure>
        <h5>Detalle</h5>
        <p class="p1"><?= $producto['nombre'] ?></p>
        <p class="p2"><strong class="color-2">Precio: <?= $producto['precio'] ?></strong></p>
        <a class="button-1" href="?id=<?= $producto['id'] ?>">Agregar al carro</a>
    </li>
    <?php
}
echo "</ul>";
//echo var_dump($producto);
?>