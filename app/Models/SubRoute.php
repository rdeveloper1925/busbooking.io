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
        'ratePerSeat',
        'currency',
        'parentBranch',
        'busId',
        'driverId',
        'userId'
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

    public function user(){
        return $this->belongsTo(User::class,'userId');
    }

    public function routeSlug($routeId){
        return Route::where('id',$routeId);
    }

    public function branch(){
        return $this->belongsTo(Branch::class,'parentBranch');
    }

}
