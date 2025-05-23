<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Figure extends Model
{
    public static function create($id)
    {
        $d = DB::table('figures')->find($id);
        $b = DB::table('figures_photos')
            ->where('id_topiary', '=', $id)
            ->pluck('links')
            ->toArray();
        return [$d,$b];
    }
}
