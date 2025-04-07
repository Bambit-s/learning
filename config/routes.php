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
$router->add('', 'posts/index.php',['GET']);
$router->add('posts', 'posts/show.php',['GET']);

$router->add('posts/create', 'posts/create.php',['GET'])->only('auth');
$router->add('posts', 'posts/store.php',['POST']);
$router->add('post', 'posts/destroy.php',['DELETE'])->only('auth');

//Pages
$router->add('about', 'about.php', ['GET']);

//Tasks
$router->add('tasks/task', 'tasks/gettask.php',['GET','POST'])->only('auth'); //create task
$router->add('tasks', 'tasks/tasks.php',['GET','POST','DELETE']);   //show all tasks and search tasks by name and id

//User
$router->add('register', 'users/register.php', ['GET','POST'])->only('guest');

// $router->post('register', 'users/store.php')->only('guest');
$router->add('login', 'users/login.php', ['POST', 'GET'])->only('guest');

$router->add('logout', 'users/logout.php',['GET'])->only('auth');

// dump($router->routes);