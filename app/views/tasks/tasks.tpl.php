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
                <div class="tasks">
                    <?php foreach ($posts as $post) : ?>
                        <div class="card mb-3" style="width: 16rem;">
                            <div class="card-body">
                                <h5 class="card-title"><a href="tasks?id=<?= h($post['id']) ?>"><?= h($post['title']) ?></a></h5>
                                <p class="card-text"><?= h($post['description']) ?></p>
                                <div class="label">
                                    <label>Дата выполнения:</label>
                                    <p class="card-text"><?= h($post['due_date']) ?></p>
                                </div>
                                <div class="label">
                                    <label>Дата созданя:</label>
                                    <p class="card-text"><?= h($post['create_date']) ?></p>
                                </div>
                                <div class="label">
                                    <label>Приоритет:</label>
                                    <p class="card-text"><?= h($post['priority']) ?></p>
                                </div>
                                <div class="label">
                                    <label>Категория:</label>
                                    <p class="card-text"><?= h($post['category']) ?></p>
                                </div>
                                <div class="label">
                                    <label>Статус:</label>
                                    <p class="card-text"><?= h($post['status']) ?></p>
                                </div>
                            </div>
                            <form action="post" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" value="<?= h($post['id']); ?>">
                                <button type="submit" class="btn btn-link">Delete</button>
                            </form>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php require VIEWS . '/incs/sidebar.php' ?>
        </div>
    </div>

</main>

<?php require VIEWS . '/incs/footer.php' ?>