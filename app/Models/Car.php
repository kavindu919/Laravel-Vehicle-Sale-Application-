<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'maker_id',
        'model_id',
        'year',
        'price',
        'vin_code',
        'mileage',
        'car_type_id',
        'fuel_type_id',
        'user_id',
        'city_id',
        'address',
        'phone',
    ];

    public function features()
    {
        return $this->hasOne(CarFeatures::class);
    }

    public function fuelType()
    {
        return $this->belongsTo(FuelType::class);
    }
    public function maker()
    {
        return $this->belongsTo(Maker::class);
    }
    public function model()
    {
        return $this->belongsTo(Model::class);
    }
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function primaryImage()
    {
        return $this->hasOne(CarImage::class)->oldestOfMany('position');
    }

    public function carType()
    {
        return $this->belongsTo(CarType::class);
    }

    public function favouredUsers()
    {
        return $this->belongsToMany(User::class, 'favourite_class');
    }
}
