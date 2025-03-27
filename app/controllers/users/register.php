<?php
$title = "My Blog :: Register";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    /** @var \myfrm\Db */

    $db = \myfrm\App::get(\myfrm\Db::class);  // для работы с бд

    $fillable = ['name', 'email', 'password'];
    $data = load($fillable);

    $validator = new \myfrm\Validator();


    //validation

    $validation = $validator->validate($data, [
        'name' => ['required' => true, 'max' => 100],
        'email' => ['email' => true, 'max' => 100, 'unique' => 'users:email'],
        'password' => ['required' => true, 'min' => 8],
    ]);

    if (!$validation->hasErrors()) {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        if ($db->query("INSERT INTO users (`name`, `email`, `password`) VALUES (:name, :email, :password)", $data)) {
            $_SESSION['success'] = "Register well!";
        } else {
            $_SESSION['error'] = "Not okay";
        }

        redirect('/');
    }
}
require_once VIEWS . '/users/register.tpl.php';
