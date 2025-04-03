<?php

if (!check_auth()){
    redirect('/');
}

$title = "My Blog :: Task";
require_once VIEWS . '/tasks/task.tpl.php';