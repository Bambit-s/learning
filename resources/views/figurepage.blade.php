@include('header')
<?php
$imgs = $datas[1];
$info = $datas[0];

// $imgpath = 'C:\Users\1\Desktop\infa\testing laravel\testing\public\imgs_figures';
// $f = scandir($imgpath);
// $count = 0;
?>
<div class="figure-alone">
    <div class="figure-alone-description">
        // foreach ($f as $imgs):
        <?php foreach ($imgs as $img): ?>
            <?php if ($datas->title == $imgs): ?>
                <?php $p = scandir("{$imgpath}\\" . $imgs); ?>
                <div class="figure-scroll">
                    <?php foreach ($p as $b => $s): ?>
                        <?php
                        $adress = '\imgs_figures\\' . $imgs . '\\' . $s;
                        ?>
                        <?php if (strlen($s) > 3 && $count == 0): ?>
                            <div class="figure-first" id="<?= $count ?>">
                                <img src="<?= $adress ?>" alt="">
                            </div>
                            <?php
                            $count++;
                            ?>
                </div>
                <div class="figure-scrolling-container">
                    <div class="figure-scrolling">
                        <button class="scroll-btn up-btn">↑</button>
                        <?php $b--; ?>
                    <?php elseif (strlen($s) > 3 && $count > 0): ?>
                        <div class="figure-other" id="<?= $count ?>">
                            <img src="<?= $adress ?>" alt="">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
                <button class="scroll-btn down-btn">↓</button>
                    </div>
                </div>
                <div class="figure-card">
                    <div class="figure-card">
                        <div class="figure-header">
                            <h2 class="figure-name"><?= $datas->webname ?></h2>
                            <div class="figure-price"><?= "{$datas->price} ₲" ?></div>
                        </div>
                        <div class="figure-specs">
                            <div class="spec-item">
                                <span class="spec-label">Tamaño: </span>
                                <span class="spec-value"><?= "{$datas->size} cm" ?></span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">Peso: </span>
                                <span class="spec-value"><?= "{$datas->weight} kg" ?></span>
                            </div>
                            <div class="spec-item">
                                <span class="spec-label">Material: </span>
                                <span class="spec-value"><?= $datas->materials ?></span>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
<?php endif; ?>

<?php endforeach; ?>

</div>
@include('footer')