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
        'routeSlug',
        'departureDateTime',
        'branchId',
        'userId',
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

    public function subRoutes(){
        return $this->hasMany(SubRoute::class,'subrouteId');
    }

    public function user(){
        return $this->belongsTo(User::class,'userId');
    }

    public function branch(){
        return $this->belongsTo(Branch::class,'branchId');
    }
}
