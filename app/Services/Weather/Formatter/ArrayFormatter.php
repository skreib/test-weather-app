<?php

namespace App\Services\Weather\Formatter;

use App\Services\Weather\Contracts\FormatterInterface;
use Illuminate\Contracts\Support\Arrayable;

final class ArrayFormatter implements FormatterInterface
{
    private $temperature;
    private $humidity;
    private $pressure;
    private $wind;
    private $city;

    public function __construct($city, $weatherDetails)
    {
        $this->temperature = (int) $weatherDetails['main']['temp'];
        $this->humidity = (int) $weatherDetails['main']['humidity'];
        $this->pressure = (int) $weatherDetails['main']['pressure'];
        $this->wind = round($weatherDetails['wind']['speed'], 1);
        $this->city = $city;
    }

    public function format(): array
    {
        return [
            'city' => $this->city,
            'temperature' => $this->temperature,
            'humidity' => $this->humidity,
            'pressure' => $this->pressure,
            'wind' => $this->wind,
        ];
    }
}
