<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class regions extends Eloquent
{
    protected $table = 'regions';

    public static function list()
    {
        $regionss = self::all()->toArray();
        $res = array();
        foreach ($regionss as $regions)
        {
            $res[$regions['id']] = $regions;
        }
        return $res;
    }
}
