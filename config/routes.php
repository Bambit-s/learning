<?php

/** 
 * var $router
 */

const MIDDLEWARE = [
    'auth' => \myfrm\middleware\Auth::class,
    'guest' => \myfrm\middleware\Guest::class,
    'admin' => \myfrm\middleware\Admin::class,
];

//Posts
$router->get('', 'posts/index.php');
$router->get('posts', 'posts/show.php');

$router->get('posts/create', 'posts/create.php')->only('auth');
$router->post('posts', 'posts/store.php');
$router->delete('post', 'posts/destroy.php')->only('auth');

//Pages
$router->get('about', 'about.php');

//Tasks
$router->get('tasks/task', 'tasks/gettask.php')->only('auth'); //create task
$router->post('tasks/task', 'tasks/task.php'); //send to data base
$router->get('tasks', 'tasks/tasks.php');   //show all
$router->post('tasks', 'tasks/tasks.php');   //search task

//User
$router->add('register', 'users/register.php', ['post', 'get'])->only('guest');
// $router->post('register', 'users/store.php')->only('guest');
$router->add('login', 'users/login.php', ['post', 'get'])->only('guest');
$router->get('logout', 'users/logout.php')->only('auth');

// dump($router->routes);