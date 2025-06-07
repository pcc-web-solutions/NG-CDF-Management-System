<?php

namespace App\Imports;

use App\Models\Country;
use Maatwebsite\Excel\Concerns\ToModel;

class CountryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Country([
            'id' => $row['id'],
            'name' => $row['name'],
            'code' => $row['code'],
            'iso_alpha3' => $row['iso_alpha3'],
            'currency' => $row['currency'],
            'timezone' => $row['timezone']
        ]);
    }
}
