<?php require VIEWS . '/incs/header.php' ?>

<main class="main py-3">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3><?= h($post['title']); ?></h3>
                <?= h($post['content']); ?>
                <?= h($post['id']); ?>
                <form action="post" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="id" value="<?= h($post['id']); ?>">
                    <?php if (check_auth()): ?>
                        <button type="submit" class="btn btn-link">Delete</button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>

</main>

<?php require VIEWS . '/incs/footer.php' ?>