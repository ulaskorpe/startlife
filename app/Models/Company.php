<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';

    protected $fillable = [
       'name'
    ];

    protected $hidden = [
        'created_at','updated_at'
    ];


    public function customers(){
        return $this->hasMany(Customer::class,'company_id','id');
    }

    public function city(){
        return $this->hasOne(City::class,'id','city_id');
    }
}
