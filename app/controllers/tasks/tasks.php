<?php

$title = 'My Blog :: Home';

$db = \myfrm\App::get(\myfrm\Db::class);

$posts = db()->query("SELECT * FROM tasks ORDER BY id DESC")->findAll(PDO::FETCH_ASSOC);

$recent_posts = db()->query("SELECT * FROM tasks ORDER BY id DESC LIMIT 3")->findAll();

$search = load(['search']);
if ($search) {
    $search = h($search['search']);
    if (is_numeric($search)) {
        $sql = db()->query("SELECT * FROM tasks WHERE id = $search")->findAll(PDO::FETCH_ASSOC);
    } else {
        $sql = db()->query("SELECT * FROM tasks WHERE title LIKE '%" . $search . "%' ")->findAll(PDO::FETCH_ASSOC);
    }
    $posts = $sql;
}

require VIEWS . '/tasks/tasks.tpl.php';
