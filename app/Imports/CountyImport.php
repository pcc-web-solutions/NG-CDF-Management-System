<?php

namespace App\Imports;

use App\Models\County;
use Maatwebsite\Excel\Concerns\ToModel;

class CountyImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new County([
            'id'           => $row['id'],
            'country_id'   => $row['country_id'],
            'name'         => $row['name'],
            'code'         => $row['code'],
            'county_number'=> $row['county_number'],
            'capital'      => $row['capital'],
            'governor'     => $row['governor'],
        ]);
    }
}
