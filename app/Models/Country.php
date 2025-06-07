<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'iso_alpha3', 'currency', 'timezone'];

    public function counties()
    {
        return $this->hasMany(County::class);
    }
}
