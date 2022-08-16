<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $fillable=array(
        'id',
        'name',
        'branchId',
        'phoneNumber',
        'address',
        'permitNo'
    );

    public function branch(){
        return $this->belongsTo(Branch::class,'branchId');
    }
}
