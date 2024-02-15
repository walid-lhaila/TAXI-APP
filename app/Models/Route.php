<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $fillable = [
        'deparature',
        'destination',
        'driver_id',
        'date_depart',
        'date_arrive',
    ];

    public function driver()
    {
        return $this->belongsTo(drivers::class);
    }

}
