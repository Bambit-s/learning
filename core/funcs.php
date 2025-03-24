<?php

function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function dd($data)
{
    dump($data);
    die;
}

function abort($code = 404)
{
    http_response_code($code);
    require VIEWS . '/errors/404.tpl.php';
    die;
}
