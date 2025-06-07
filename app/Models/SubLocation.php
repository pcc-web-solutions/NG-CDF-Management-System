<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubLocation extends Model
{
    use HasFactory;

    protected $fillable = ['location_id', 'name', 'code', 'assistant_chief'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function villages()
    {
        return $this->hasMany(Village::class);
    }
}
