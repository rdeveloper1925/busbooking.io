<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $fillable=array(
        'id',
        'origin',
        'finalDestination',
        'busId',
        'driverId',
        'routeSlug',
        'departureDateTime',
        'capacity',
        'actualCarriage',
        'ratePerSeat',
        'userId',
        'via'
    );

    public function buses(){
        return $this->hasMany(Bus::class,'busId');
    }

    public function drivers(){
        return $this->hasMany(Driver::class,'driverId');
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
