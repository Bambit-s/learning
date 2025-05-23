<?php

namespace App\Http\Controllers;

use App\Models\Figures;

class Catalog extends Controller
{
    function catalog()
    {
        $res = Figures::show();
        return view('catalog', ['results' => $res]);
    }
}
