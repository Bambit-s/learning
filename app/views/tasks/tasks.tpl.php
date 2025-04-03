<?php require VIEWS . '/incs/header.php' ?>

<main class="main py-3">

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="mb-3">
                    <h3>Поиск</h3>
                    <form action="" method="post" class="nd-3">
                        <input name="search" class="form-control">
                    </form>
                </div>

                <?php foreach ($posts as $post) : ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><a href="posts?id=<?= $post['id'] ?>"><?= h($post['title']) ?></a></h5>
                            <p class="card-text"><?= $post['description'] ?></p>
                            <p class="card-text"><?= $post['due_date'] ?></p>
                            <p class="card-text"><?= $post['priority'] ?></p>
                            <p class="card-text"><?= $post['category'] ?></p>
                            <a href="posts?id=<?= $post['id'] ?>">Go somewhere</a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <?php require VIEWS . '/incs/sidebar.php' ?>
        </div>
    </div>

</main>

<?php require VIEWS . '/incs/footer.php' ?>