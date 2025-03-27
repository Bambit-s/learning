<?php
$db= \myfrm\App::get(\myfrm\Db::class);

$api_data = json_decode(file_get_contents('php://input'), true);

$data = $api_data ?? $_POST;
$id = $data['id'] ?? 0;

$db->query("DELETE FROM posts WHERE id = ?", [$id]);
if ($db->rowCount()){
    $res['answer'] =$_SESSION['success'] = "Post deleted";
}else{
    $res['answer'] =$_SESSION['error'] = "Deletion errror";
}

if ($api_data){
    echo json_encode($res);
    die;
}

redirect('/');

