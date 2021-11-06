<?php

namespace App\Repositories;

use App\Models\CityWeather;

final class CityWeatherRepository
{
    public static function save(array $params): void
    {
        $weatherModel = new CityWeather();
        $weatherModel->city_id = $params['city_id'];
        $weatherModel->temperature = $params['temperature'];
        $weatherModel->humidity = $params['humidity'];
        $weatherModel->pressure = $params['pressure'];
        $weatherModel->wind_speed = $params['wind'];
        $weatherModel->save();
    }
}
