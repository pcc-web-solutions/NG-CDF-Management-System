<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\County;
use App\Models\Country;

class CountyFactory extends Factory
{
    protected $model = County::class;

    public function definition()
    {
        return [
            'country_id' => Country::factory(),
            'name' => $this->faker->unique()->state(),
            'code' => strtoupper($this->faker->lexify('???')),
            'county_number' => $this->faker->unique()->numberBetween(1, 47),
            'capital' => $this->faker->city(),
            'governor' => $this->faker->name(),
        ];
    }
}
