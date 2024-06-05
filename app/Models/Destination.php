<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['city', 'province', 'duration', 'price', 'description', 'image', 'number'];

    public function getRouteKeyName()
    {
        return 'city'; // or 'city' if you are using the city column for routing
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'destination_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}