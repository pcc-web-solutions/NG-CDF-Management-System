<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Country;

class CountryFactory extends Factory
{
    protected $model = Country::class;

    public function definition()
    {
        return [
            'name' => 'Kenya',
            'code' => 'KE',
            'iso_alpha3' => 'KEN',
            'currency' => 'KES',
            'timezone' => 'Africa/Nairobi',
        ];
    }
}
