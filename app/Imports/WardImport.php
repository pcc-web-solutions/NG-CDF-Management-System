<?php

namespace App\Imports;

use App\Models\Ward;
use Maatwebsite\Excel\Concerns\ToModel;

class WardImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ward([
            'id'           => $row['id'],
            'sub_county_id'=> $row['sub_county_id'],
            'name'         => $row['name'],
            'code'         => $row['code'],
            'ward_number'  => $row['ward_number'],
        ]);
    }
}
