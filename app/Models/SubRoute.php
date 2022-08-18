<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubRoute extends Model
{
    use HasFactory;
    protected $fillable=array(
        'id',
        'routeId',
        'costPerSeat',
        'busId',
        'driverId'
    );

    public function route(){
        return $this->belongsTo(Route::class,'routeId');
    }

    public function bus(){
        return $this->belongsTo(Route::class,'busId');
    }

    public function driver(){
        return $this->belongsTo(Driver::class,'driverId');
    }

}
