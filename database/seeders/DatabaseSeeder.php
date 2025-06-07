<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CountryImport;
use App\Imports\CountyImport;
use App\Imports\SubCountyImport;
use App\Imports\WardImport;
use App\Imports\LocationImport;
use App\Imports\SubLocationImport;
use App\Imports\VillageImport;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $file = storage_path('app/Data/KenyaAdministrativeUnits.xlsx');

        Excel::import(new CountryImport, $file, null, \Maatwebsite\Excel\Excel::XLSX);
        Excel::import(new CountyImport, $file, null, \Maatwebsite\Excel\Excel::XLSX);
        Excel::import(new SubCountyImport, $file, null, \Maatwebsite\Excel\Excel::XLSX);
        Excel::import(new WardImport, $file, null, \Maatwebsite\Excel\Excel::XLSX);
        Excel::import(new LocationImport, $file, null, \Maatwebsite\Excel\Excel::XLSX);
        Excel::import(new SubLocationImport, $file, null, \Maatwebsite\Excel\Excel::XLSX);
        Excel::import(new VillageImport, $file, null, \Maatwebsite\Excel\Excel::XLSX);
    }
}
