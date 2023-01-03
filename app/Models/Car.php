<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Car extends Model
{
    use HasFactory;
    protected $table = "cars";
    protected $fillable = ["modelCar","brandCar","version", "description", "image", "items", "user_id"];
    protected $casts =[
        'items' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function carMaintenance()
    {
        return $this->hasMany(CarMaintenance::class);
    }
}
