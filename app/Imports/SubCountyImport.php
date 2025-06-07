<?php

namespace App\Imports;

use App\Models\SubCounty;
use Maatwebsite\Excel\Concerns\ToModel;

class SubCountyImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new SubCounty([
            'id'                 => $row['id'],
            'county_id'          => $row['county_id'],
            'name'               => $row['name'],
            'code'               => $row['code'],
            'sub_county_office'  => $row['sub_county_office'],
        ]);
    }
}
