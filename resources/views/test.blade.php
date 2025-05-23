@include('header')
<div class="carousel">
    <?php
    $results_figures = $results[0];
    $results_figures_links = $results[1];
    ?>

    <?php foreach ($results_figures as $figure): ?>

        <div class="photo-description">
            <div class="item-main">
                <?php $array_links = []; ?>
                <a class="product-link" href="<?= $figure->id ?>">
                    <?php foreach ($results_figures_links as $link): ?>
                        <?php if ($figure->id == $link->id_topiary): ?>
                            <?php $array_links[] = $link->links; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php $count = 0; ?>
                    <?php foreach ($array_links as $photo): ?>
                        <?php if ($count == 0): ?>
                            <div class="imgs_catalog active">
                                <img src="<?= $photo ?>" alt="">
                            </div>
                        <?php else: ?>
                            <div class="imgs_catalog">
                                <img src="<?= $photo ?>" alt="">
                            </div>
                        <?php endif; ?>
                        <?php $count++; ?>
                    <?php endforeach; ?>
                </a>
            </div>
            <div class="product-info">
                <h3 class="product-title"><?= $figure->webname; ?></h3>
                <div class="price"><?= number_format($figure->price, 0, ',', ' '); ?> ₲</div>
            </div>
            <div class="specs-grid">
                <div class="spec-item-catalog">
                    <span class="spec-label">Tamaño:</span>
                    <span class="spec-value"><?= $figure->size; ?> cm</span>
                </div>
                <div class="spec-item-catalog-catalog">
                    <span class="spec-label">Peso:</span>
                    <span class="spec-value"><?= $figure->weight; ?> kg</span>
                </div>

                <!--<button class="add-to-cart">Añadir al carrito</button>-->
            </div>
        </div>
    <?php endforeach; ?>
</div>

@include('footer')