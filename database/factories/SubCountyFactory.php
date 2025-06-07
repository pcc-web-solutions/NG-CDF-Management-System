<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SubCounty;
use App\Models\County;

class SubCountyFactory extends Factory
{
    protected $model = SubCounty::class;

    public function definition()
    {
        return [
            'county_id' => County::factory(),
            'name' => $this->faker->unique()->city(),
            'code' => strtoupper($this->faker->lexify('SC???')),
            'sub_county_office' => $this->faker->streetAddress(),
        ];
    }
}
