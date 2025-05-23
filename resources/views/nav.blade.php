<?php
$nav = [
    1 => ['/catalog', 'Página de catálogo', 'Página do catálogo', 'Catalog page'],
    2 => ['/about', 'Sobre nosotros', 'Sobre nós', 'About us'],
    3 => ['/delivery', 'Entrega', 'Entrega', 'Delivery'],
    4 => ['/montage', 'Montaje', 'Montagem', 'Assembly'],
    5 => ['/comments', 'Comentarios', 'Comentários', 'Comments'],
    6 => ['/contacts', 'Contactos', 'Contatos', 'Contacts'],
];
?>
<?php foreach ($nav as $link): ?>
    <?php if ($_SERVER['REQUEST_URI'] == $link[0]) : ?>
        <a href=<?= $link[0] ?> class="nav_link_active" data-lang-content="es"><?= $link[1] ?></a>
        <a href=<?= $link[0] ?> class="nav_link_active" data-lang-content="pt" style="display: none;"><?= $link[2] ?></a>
        <a href=<?= $link[0] ?> class="nav_link_active" data-lang-content="en" style="display: none;"><?= $link[3] ?></a>
    <?php else: ?>
        <a href=<?= $link[0] ?> class="nav_link" data-lang-content="es"><?= $link[1] ?></a>
        <a href=<?= $link[0] ?> class="nav_link" data-lang-content="pt" style="display: none;"><?= $link[2] ?></a>
        <a href=<?= $link[0] ?> class="nav_link" data-lang-content="en" style="display: none;"><?= $link[3] ?></a>
    <?php endif ?>
<?php endforeach ?>