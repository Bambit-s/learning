<?php

namespace myfrm\middleware;

class Admin{
    public function handle()
    {
        if (check_auth()) {
            redirect('/');
        }
    }
}