<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $fillable=array(
        'id',
        'numberPlate',
        'model',
        'seatCount',
        'seatLayout'
    );

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }


}
