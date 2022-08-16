<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = array(
        'id',
        'seatNumber',
        'busId',
    );

    public function bus(){
        return $this->belongsTo(Bus::class,'busId');
    }
}
