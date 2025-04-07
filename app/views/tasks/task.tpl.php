<?php
require VIEWS . '/incs/header.php'
/*
*   @var \myfrm\ValidatorTask $validation
*/
?>

<main class="main py-3">

    <div class="container">
        <div class="d-flex justify-content-left">
            <div class="col-md-4">
                <h1>New task</h1>

                <form action="" method="post">
                    <div class="mb-3">
                        <label>Название</label>
                        <input class="form-control" id="title" name="title" value="<?= old("title") ?>">
                        <?= isset($validation) ? $validation->listErrors('title') : '' ?>
                    </div>

                    <div class="mb-3">
                        <label>Описание</label>
                        <textarea class="form-control" id="description" name="description" value="<?= old("description") ?>"></textarea>
                        <?= isset($validation) ? $validation->listErrors('description') : '' ?>
                    </div>

                    <div class="mb-3">
                        <label for="">Срок выполнения</label>
                        <input class="form-control" id="due_date" name="due_date" type="datetime-local" value="<?= old("due_date") ?>">
                        <?= isset($validation) ? $validation->listErrors('due_date') : '' ?>
                    </div>

                    <div class="mb-3">
                        <label>Приоритет</label>
                        <select class="form-control" name="priority" id="priority-selected">
                            <option value="">--Выберите приоритет--</option>
                            <option value="Высокий" <?= old('priority') === 'Высокий' ? 'selected' : '' ?>>Высокий</option>
                            <option value="Средний" <?= old('priority') === 'Средний' ? 'selected' : '' ?>>Средний</option>
                            <option value="Низкий" <?= old('priority') === 'Низкий' ? 'selected' : '' ?>>Низкий</option>
                        </select>
                        <?= isset($validation) ? $validation->listErrors('priority') : '' ?>
                    </div>

                    <div class="mb-3">
                        <label>Категория</label>
                        <select class="form-control" name="category" id="category-selected">
                            <option value="">--Выберите категорию--</option>
                            <option value="Работа" <?= old('category') === 'Работа' ? 'selected' : '' ?>>Работа</option>
                            <option value="Дом" <?= old('category') === 'Дом' ? 'selected' : '' ?>>Дом</option>
                            <option value="Личное" <?= old('category') === 'Личное' ? 'selected' : '' ?>>Личное</option>
                        </select>
                        <?= isset($validation) ? $validation->listErrors('category') : '' ?>
                    </div>

                    <div class="mb-3">
                        <input type="submit" name="send" value="Отправить">
                    </div>

                </form>
            </div>
        </div>
    </div>

</main>

<?php require VIEWS . '/incs/footer.php' ?>