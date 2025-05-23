<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Figures extends Model
{
    public static function show()
    {
        $figures = DB::select('select * from figures');
        //$figures_photos = DB::select('select * from figures_photos');
        return $figures;
    }
}
