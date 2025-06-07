<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use App\Models\Country;
use App\Models\County;
use App\Models\SubCounty;
use App\Models\Ward;
use App\Models\Location;
use App\Models\SubLocation;
use App\Models\Village;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/KenyaAdministrativeUnits.json'));
        $data = json_decode($json, true);

        foreach ($data['countries'] as $countryData) {
            $country = Country::create([
                'name' => $countryData['name'],
                'code' => $countryData['code'],
                'iso_alpha3' => $countryData['iso_alpha3'],
                'currency' => $countryData['currency'],
                'timezone' => $countryData['timezone'],
            ]);

            foreach ($countryData['counties'] ?? [] as $countyData) {
                $county = County::create([
                    'country_id' => $country->id,
                    'name' => $countyData['name'],
                    'code' => $countyData['code'],
                    'county_number' => $countyData['county_number'],
                    'capital' => $countyData['capital'],
                    'governor' => $countyData['governor'],
                ]);

                foreach ($countyData['sub_counties'] ?? [] as $subCountyData) {
                    $subCounty = SubCounty::create([
                        'county_id' => $county->id,
                        'name' => $subCountyData['name'],
                        'code' => $subCountyData['code'],
                        'sub_county_office' => $subCountyData['sub_county_office'],
                    ]);

                    foreach ($subCountyData['wards'] ?? [] as $wardData) {
                        $ward = Ward::create([
                            'sub_county_id' => $subCounty->id,
                            'name' => $wardData['name'],
                            'code' => $wardData['code'],
                            'ward_number' => $wardData['ward_number'],
                        ]);

                        foreach ($wardData['locations'] ?? [] as $locationData) {
                            $location = Location::create([
                                'ward_id' => $ward->id,
                                'name' => $locationData['name'],
                                'code' => $locationData['code'],
                                'chief' => $locationData['chief'],
                            ]);

                            foreach ($locationData['sub_locations'] ?? [] as $subLocationData) {
                                $subLocation = SubLocation::create([
                                    'location_id' => $location->id,
                                    'name' => $subLocationData['name'],
                                    'code' => $subLocationData['code'],
                                    'assistant_chief' => $subLocationData['assistant_chief'] ?? null,
                                ]);

                                foreach ($subLocationData['villages'] ?? [] as $villageData) {
                                    Village::create([
                                        'sub_location_id' => $subLocation->id,
                                        'name' => $villageData['name'],
                                        'code' => $villageData['code'],
                                    ]);
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}