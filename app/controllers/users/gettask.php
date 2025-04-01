<?php

if (!check_auth()){
    redirect('/');
}

$title = "My Blog :: Task";
require_once VIEWS . '/posts/task.tpl.php';