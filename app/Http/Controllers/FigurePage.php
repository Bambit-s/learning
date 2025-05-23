<?php

namespace App\Http\Controllers;

use App\Models\Figure;

class FigurePage extends Controller
{
    public function show($id)
    {
        $k = Figure::create($id);
        return view('figurepage', [
            'datas' => $k,
        ]);
    }
}
