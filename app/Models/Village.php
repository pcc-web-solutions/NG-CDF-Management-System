<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Village extends Model
{
    use HasFactory;

    protected $fillable = ['sub_location_id', 'name', 'code'];

    public function subLocation()
    {
        return $this->belongsTo(SubLocation::class);
    }
}