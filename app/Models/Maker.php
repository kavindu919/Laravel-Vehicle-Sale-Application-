<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
    public function models()
    {
        return $this->hasMany(Model::class);
    }
}
