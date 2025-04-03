<?php


function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}
function print_arr($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
function dd($data)
{
    dump($data);
    die;
}

function abort($code = 404, $title = "404 - not found") // Вывод ошибки.
{
    http_response_code($code);
    require VIEWS . '/errors/404.tpl.php';
    die;
}

function load($fillable = [])   //Функция добавления в массивы POST.
{
    $data = [];
    foreach ($_POST as $k => $v) {
        if (in_array($k, $fillable)) {
            $data[$k] = trim($v);
        }
    }
    return $data;
}

function old($fieldname)    // Сохрание введеных данных.
{
    return isset($_POST[$fieldname]) ? h($_POST[$fieldname]) : '';
}

function h($str)        //обертка
{
    return htmlentities($str, ENT_QUOTES);
}

function redirect($url = '')
{
    if ($url) {
        $redirect = $url;
    } else {
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: {$redirect}");
    die();
}

function get_allert()
{
    if (!empty($_SESSION['success'])) {
        require_once VIEWS . '/incs/alert_success.php';
        unset($_SESSION['success']);
    }
    if (!empty($_SESSION['error'])) {
        require_once VIEWS . '/incs/alert_error.php';
        unset($_SESSION['error']);
    }
}

function db(): \myfrm\Db
{
    return \myfrm\App::get(\myfrm\Db::class);
}

function check_auth()
{
    return isset($_SESSION['user']);
}
