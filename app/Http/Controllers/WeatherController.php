<?php

namespace App\Http\Controllers;

use App\Services\Weather\Cities;
use App\Services\Weather\Formatter\ArrayFormatter;
use App\Services\Weather\WeatherClient;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class WeatherController extends Controller
{
    public function kyiv(WeatherClient $weatherClient): View
    {
        $weatherDetails = $weatherClient->kyiv();
        $formatter = new ArrayFormatter(Cities::KYIV, $weatherDetails);

        return view('weather.city', $formatter->format());
    }

    public function city(Request $request, WeatherClient $weatherClient): View
    {
        $city = ucfirst($request->query->get('city') ?? $request->request->get('city'));

        $weatherDetails = $weatherClient->getWeatherForCity($city);
        $formatter = new ArrayFormatter($city, $weatherDetails);

        return view('weather.city', $formatter->format());
    }

    public function list()
    {
        return view('weather.cities-list', ['cities' => Cities::DEFAULT_CITIES_LIST]);
    }
}
