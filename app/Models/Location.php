<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['ward_id', 'name', 'code', 'chief'];

    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }

    public function subLocations()
    {
        return $this->hasMany(SubLocation::class);
    }
}
