<?php

namespace App\Services\Weather;

use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

final class WeatherClient
{
    /**
     * @return array
     * @throws \JsonException
     * @throws \Exception
     */
    public function kyiv(): array
    {
        return $this->getWeatherForCity(Cities::KYIV);
    }

    /**
     * @param string $city
     * @return mixed
     * @throws \JsonException
     * @throws \Exception
     */
    public function getWeatherForCity(string $city)
    {
        $url = sprintf(
            'api.openweathermap.org/data/2.5/weather?q=%s&appid=%s&units=metric',
            $city,
            config('app.openweathermap_app_id')
        );
        $response = Http::get($url);
        if ($response->status() !== Response::HTTP_OK) {
            throw new Exception("Invalid response: {$response->body()}");
        }

        return json_decode($response->body(), true, 512, JSON_THROW_ON_ERROR);
    }
}
