@include('header')
<div class="carousel">
    @foreach ($results as $result)
    <?php
    $f = scandir('C:\Users\1\Desktop\infa\testing laravel\testing\public\imgs_figures');
    echo '<div class="photo-description">';
    foreach ($f as $k) {
        if ($result->title == $k) {
            $p = scandir('C:\Users\1\Desktop\infa\testing laravel\testing\public\imgs_figures\\' . $k);
            echo '<div class="item-main">';
            $count = 0;
            echo '<a class="buskar" href="/catalog/' . $result->id . '">';
            foreach ($p as $b => $s) {
                if (strlen($s) > 3 && $count == 0) {
                    $p = 'imgs_figures\\' . $k . '\\' . $s;
                    echo '<div class="imgs_catalog active">';
                    echo '<img  src="' . $p . '" alt="">';
                    echo '</div>';
                    $count++;
                } elseif (strlen($s) > 3 && $count > 0) {
                    $p = 'imgs_figures\\' . $k . '\\' . $s;
                    echo '<div class="imgs_catalog">';
                    echo '<img  src="' . $p . '" alt="">';
                    echo '</div>';
                }
            }
            echo '</a>';
            echo '</div>';
            $res = ((json_decode(json_encode($result), true)));
            echo '<div class="product-info">';
            echo   '<h3 class="product-title">' . $res['webname'] . '</h3>';
            echo  '<div class="price">' . $res['price'] . ' ₲</div>';
            echo '</div>';
            echo '<div class="specs-grid">';
            echo    '<div class="spec-item-catalog">';
            echo        '<span class="spec-label" data-lang-content="es">Tamaño:</span>';
            echo        '<span class="spec-label" data-lang-content="pt" style="display: none;">Tamanho:</span>';
            echo        '<span class="spec-label" data-lang-content="en" style="display: none;">Size:</span>';
            echo        '<span class="spec-value">' . $res['size'] . ' cm</span>';
            echo    '</div>';
            echo    '<div class="spec-item-catalog">';
            echo        '<span class="spec-label">Peso:</span>';
            echo        '<span class="spec-value">' . $res['weight'] . ' kg</span>';
            echo    '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
    ?>
    @endforeach
</div>
@include('footer')