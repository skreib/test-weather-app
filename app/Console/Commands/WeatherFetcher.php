<?php

namespace App\Console\Commands;

use App\Models\City;
use App\Models\CityWeather;
use App\Repositories\CityRepository;
use App\Repositories\CityWeatherRepository;
use App\Services\Weather\Cities;
use App\Services\Weather\Formatter\ArrayFormatter;
use App\Services\Weather\WeatherClient;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class WeatherFetcher extends Command
{
    private const DEFAULT_PRECISION = 1;

    protected $signature = 'weather:fetch';

    protected $description = 'Fetch the weather for particular city.';

    public function handle(): void
    {
        $this->output->table(
            ['City', 'Temperature, °C', 'Humidity, %', 'Pressure, mm Hg', 'Wind, m/s'],
            $this->getWeatherDetails()
        );
    }

    private function getWeatherDetails(): array
    {
        $dataByCities = [];
        foreach (CityRepository::all() as $cityModel) {
            $weatherDetails = (new WeatherClient())->getWeatherForCity($cityModel->city);
            $formattedWeatherDetails = (new ArrayFormatter($cityModel->city, $weatherDetails))->format();
            $dataByCities[] = $formattedWeatherDetails;

            CityWeatherRepository::save(array_merge($formattedWeatherDetails, ['city_id' => $cityModel->id]));
        }

        return $dataByCities;
    }
}
