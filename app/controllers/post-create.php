<?php

use myfrm\Validator;

/**
 * @var \myfrm\Db $db
 */
if (($_SERVER["REQUEST_METHOD"]) == "POST") {

    $fillable = ['title', 'content', 'excerpt'];
    $data = load($fillable);
// [
//         'title' => 'Explicabo Enim corp',
//         'excerpt' => 'Expl',
//         'content' => 'Explicabo Enim corp',
//         'email' => 'mail@mail.com',
//         'password' => '12345678',
//         'repassword' => '12345678',
//     ]
    //validation
    $validator = new Validator();
    $validation = $validator->validate($data, [
        'title' => ['required' => true, 'min' => 5, 'max' => 190],
        'excerpt' => ['required' => true, 'min' => 5, 'max' => 190],
        'content' => ['required' => true, 'min' => 10],
        'email' => ['required' => true],
        'password' => ['required' => true, 'min' => 8],
        'repassword' => ['match' => 'password'],
    ]);

    if (!$validation->hasErrors()) {
        if ($db->query("INSERT INTO posts (`title`, `content`, `excerpt`) VALUES (:title, :content, :excerpt)", $data)) {
            $_SESSION['success'] = "OK";
        } else {
            $_SESSION['error'] = "DB Erors";
        }
        redirect();
    }
}

$title = "My Blog :: New post";
require_once VIEWS . '/post-create.tpl.php';
