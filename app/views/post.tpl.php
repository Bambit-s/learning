<?php require 'incs/header.php' ?>

<main class="main py-3">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?= h($post['title']); ?>
                <?= $post['content']; ?>
            </div>
        </div>
    </div>

</main>

<?php require 'incs/footer.php' ?>