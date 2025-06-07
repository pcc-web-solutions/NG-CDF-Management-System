<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class County extends Model
{
    use HasFactory;

    protected $fillable = ['country_id', 'name', 'code', 'county_number', 'capital', 'governor'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function subCounties()
    {
        return $this->hasMany(SubCounty::class);
    }
}