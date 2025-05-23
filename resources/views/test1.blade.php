@include('header')
<?php
$imgs = $datas[1];
$info = $datas[0];
?>
<div class="figure-alone">
    <div class="figure-alone-description">
        <?php foreach ($imgs as $nomber => $img): ?>
            <?php if ($nomber == 0): ?>
                <div class="figure-scroll">
                    <div class="figure-first" id="<?= $nomber ?>">
                        <img src="<?= $img ?>" alt="">
                    </div>
                </div>
                <div class="figure-scrolling-container">
                    <div class="figure-scrolling">
                        <button class="scroll-btn up-btn">↑</button>
                    <?php else: ?>
                        <div class="figure-other" id="<?= $nomber ?>">
                            <img src="<?= $img ?>" alt="">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
                <button class="scroll-btn down-btn">↓</button>
                    </div>
                </div>
                <div class="figure-card">
                    <div class="figure-card">
                        <div class="figure-header">
                            <h2 class="figure-name"><?= $info->webname ?></h2>
                            <div class="figure-price"><?= "{$info->price} ₲" ?></div>
                        </div>
                        <div class="figure-specs">
                            <div class="spec-item">
                                <span class="spec-label">Tamaño: </span>
                                <span class="spec-value"><?= "{$info->size} cm" ?></span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">Peso: </span>
                                <span class="spec-value"><?= "{$info->weight} kg" ?></span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">Material: </span>
                                <span class="spec-value"><?= $info->materials ?></span>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
@include('footer')