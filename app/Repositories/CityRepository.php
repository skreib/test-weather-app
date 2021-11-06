<?php

namespace App\Repositories;

use App\Models\City;

final class CityRepository
{
    public static function all()
    {
        return City::all();
    }

    public static function getCityWithWeatherHistory(string $city): ?City
    {
        return City::with('weather')->where('city', $city)->first();
    }
}
