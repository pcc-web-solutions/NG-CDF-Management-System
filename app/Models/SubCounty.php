<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCounty extends Model
{
    use HasFactory;

    protected $fillable = ['county_id', 'name', 'code', 'sub_county_office'];

    public function county()
    {
        return $this->belongsTo(County::class);
    }

    public function wards()
    {
        return $this->hasMany(Ward::class);
    }
}