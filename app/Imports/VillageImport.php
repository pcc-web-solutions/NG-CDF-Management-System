<?php

namespace App\Imports;

use App\Models\Village;
use Maatwebsite\Excel\Concerns\ToModel;

class VillageImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Village([
            'id'              => $row['id'],
            'sub_location_id' => $row['sub_location_id'],
            'name'            => $row['name'],
            'code'            => $row['code'],
        ]);
    }
}
