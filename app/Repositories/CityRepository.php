<?php

namespace App\Repositories;

use App\Models\City;

final class CityRepository
{
    public static function all()
    {
        return City::all();
    }
}
