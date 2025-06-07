<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Country;
use App\Models\County;
use App\Models\SubCounty;
use App\Models\Ward;
use App\Models\Location;
use App\Models\SubLocation;

class AdministrativeUnitsSeeder extends Seeder
{
    public function run()
    {
        $json = File::get(database_path('seeders/data/KenyaAdministrativeUnits.json'));
        $data = json_decode($json, true);

        $kenya = Country::firstOrCreate([
            'name' => 'Kenya',
            'code' => 'KEN',
        ]);

        foreach ($data as $countyData) {
            $county = County::create([
                'name' => $countyData['name'],
                'code' => $countyData['code'],
                'capital' => $countyData['capital'],
                'country_id' => $kenya->id,
            ]);

            foreach ($countyData['sub_counties'] as $subCountyData) {
                $subCounty = SubCounty::create([
                    'name' => $subCountyData['name'],
                    'county_id' => $county->id,
                ]);

                foreach ($subCountyData['wards'] as $wardData) {
                    $ward = Ward::create([
                        'name' => $wardData['name'],
                        'sub_county_id' => $subCounty->id,
                    ]);

                    foreach ($wardData['locations'] as $locationData) {
                        $location = Location::create([
                            'name' => $locationData['name'],
                            'ward_id' => $ward->id,
                        ]);

                        foreach ($locationData['sub_locations'] as $subLocationData) {
                            SubLocation::create([
                                'name' => $subLocationData['name'],
                                'location_id' => $location->id,
                            ]);
                        }
                    }
                }
            }
        }
    }
}