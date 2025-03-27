<?php

$container = new \myfrm\ServiceContainer();
$container->setService(\myfrm\Db::class, function () {
    $db_config = require CONFIG . '/db.php';
    return (\myfrm\Db::getInstance())->getConncection($db_config);
});

\myfrm\App::setContainer($container);
