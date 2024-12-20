<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarFeatures extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $primaryKey = 'car_id';
    protected $fillable = [
        'car_id',
        'abs',
        'air_conditioning',
        'power_windows',
        'power_door_locks',
        'cruise_control',
        'bluetooth_connectivity',
        'remote_strat',
        'gps_navigation',
        'heated_seats',
        'climate_control',
        'rear_parking_sensors',
        'leather_seates',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
