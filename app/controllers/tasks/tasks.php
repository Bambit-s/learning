<?php

$db = \myfrm\App::get(\myfrm\Db::class);

$posts = db()->query("SELECT * FROM tasks ORDER BY id DESC")->findAll(PDO::FETCH_ASSOC);
$recent_posts = db()->query("SELECT * FROM tasks ORDER BY id DESC LIMIT 3")->findAll();
$api_data = json_decode(file_get_contents('php://input'), true);
$data = $_POST;
dump($data);
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

$id = load(['id']);
if ($id) {



    $id = $data['id'] ?? 0;
    dump($id);
    // $sql = db()->query("DELETE FROM tasks WHERE id = ?", [$id]);
    // if ($db->rowCount()) {
    //     $res['answer'] = $_SESSION['success'] = "Task deleted";
    // } else {
    //     $res['answer'] = $_SESSION['error'] = "Deletion error";
    // }

    // redirect('/tasks');
}

require VIEWS . '/tasks/tasks.tpl.php';
