<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = array(
        'id',
        'routeId',
        'busId',
        'driverId',
        'currency',
        'amountPaid', //nullable
        'seatNumber',
        'bookingStatus',
        'multipleBookings',
        'customerName',
        'phoneNumber',
        'userId'
    );

    public function route(){
        return $this->belongsTo(Route::class,'routeId');
    }

    public function user(){
        return $this->belongsTo(User::class,'userId');
    }
}
