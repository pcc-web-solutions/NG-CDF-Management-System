<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ward extends Model
{
    use HasFactory;

    protected $fillable = ['sub_county_id', 'name', 'code', 'ward_number'];

    public function subCounty()
    {
        return $this->belongsTo(SubCounty::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
