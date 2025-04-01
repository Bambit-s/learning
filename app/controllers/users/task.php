<?php
$title = "My Blog :: Task";
/** @var \myfrm\Db */
$db = \myfrm\App::get(\myfrm\Db::class);  // для работы с бд
$fillable = ['title', 'description', 'due_date', 'priority', 'category'];
$data = load($fillable);

$validator = new \myfrm\ValidatorTask();
$validation = $validator->validate($data, [
    'title' => ['required' => true, 'min' => 3],
    'description' => ['required' => true],
    'due_date' => ['required' => true],
    'priority' => ['required' => true],
    'category' => ['required' => true],
]);
if (!$validation->hasErrors()) {
    if ($db->query("INSERT INTO tasks (`title`, `description`, `due_date`,`priority`,`category`) VALUES (:title, :description, :due_date, :priority, :category)", $data)) {
        
        $_SESSION['success'] = "Send well!";
    } else {
        $_SESSION['error'] = "Not okay";
    }
    redirect('/');
} else {
    require VIEWS . "/posts/task.tpl.php";
}
