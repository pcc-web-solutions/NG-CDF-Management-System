<?php

namespace App\Imports;

use App\Models\Location;
use Maatwebsite\Excel\Concerns\ToModel;

class LocationImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Location([
            'id'      => $row['id'],
            'ward_id' => $row['ward_id'],
            'name'    => $row['name'],
            'code'    => $row['code'],
            'chief'   => $row['chief'],
        ]);
    }
}
