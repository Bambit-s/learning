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
$router->get('contact', 'contact.php');

//User
$router->add('register', 'users/register.php', ['post', 'get'])->only('guest');
// $router->post('register', 'users/store.php')->only('guest');
$router->add('login', 'users/login.php', ['post', 'get'])->only('guest');
$router->get('logout', 'users/logout.php')->only('auth');

// dump($router->routes);