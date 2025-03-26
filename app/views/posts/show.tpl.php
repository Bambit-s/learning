<?php require VIEWS . '/incs/header.php' ?>

<main class="main py-3">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?= h($post['title']); ?>
                <?= $post['content']; ?>
                <?= $post['id']; ?>
                <form action="/posts" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="id" value="<?= $post['id']; ?>">
                    <button type="submit" class="btn btn-link">Delete</button>
                </form>

            </div>
        </div>
    </div>

</main>

<?php require VIEWS . '/incs/footer.php' ?>