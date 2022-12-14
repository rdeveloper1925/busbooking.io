<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable=array(
        'id',
        'branchName',
        'branchLocation',
        'contactPerson',
        'phoneNumber', //nullable
        
    );


    public function users(){
        return $this->hasMany(User::class,'branchId');
    }

    public function drivers(){
        return $this->hasMany(Driver::class,'driverId');
    }

    public function usersPerBranch(){
        return ;
    }

    public function routes(){
        return $this->hasMany(Route::class,"branchId");
    }
}
