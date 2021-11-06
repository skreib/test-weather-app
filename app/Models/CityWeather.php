<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CityWeather
 *
 * @property int $id
 * @property int $city_id
 * @property int $temperature
 * @property int $humidity
 * @property int $pressure
 * @property string $wind_speed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|CityWeather newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CityWeather newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CityWeather query()
 * @method static \Illuminate\Database\Eloquent\Builder|CityWeather whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CityWeather whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CityWeather whereHumidity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CityWeather whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CityWeather wherePressure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CityWeather whereTemperature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CityWeather whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CityWeather whereWindSpeed($value)
 * @mixin \Eloquent
 */
class CityWeather extends Model
{
    public const UPDATED_AT = null;

    use HasFactory;
}
