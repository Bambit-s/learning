<?php require VIEWS . '/incs/header.php' ?>

<main class="main py-3">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3><?= h($post['title']); ?></h3>
                <?= $post['content']; ?>
                <?= $post['id']; ?>
                <form action="post" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?= $post['id']; ?>">
                    <button type="submit" class="btn btn-link">Delete</button>
                </form>
            </div>
        </div>
    </div>

</main>

<?php require VIEWS . '/incs/footer.php' ?>