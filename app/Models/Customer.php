<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'customers';

    protected $fillable = [
        'is_male','first_name','city','country','company_id','birth_date'
    ];

    protected $hidden = [
        'created_at','updated_at','deleted_at'
    ];




    public function company(){
        return $this->hasOne(Company::class,'id','company_id');
    }
}
