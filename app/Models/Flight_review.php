<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
use App\Models\Flight as Flight;

class Flight_review extends Eloquent
{
    // protected $table = 'flight_reviews';

    public static function list()
    {
        $flight_reviews = self::all()->toArray();
        $res = array();
        foreach ($flight_reviews as $flight_review)
        {
            $res[$flight_review['id']] = $flight_review;
        }
        return $res;
    }
	public function flight()
    {
        return $this->belongsTo(App\Models\Flight::class); 
    }
}
