<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'firts_name'        ,
        'last_name'         ,
        'email'             ,
        'date_of_birth'     ,
        'hire_date'         ,
        'salary'            ,
        'manager_id'        ,
        'is_active'         ,
        'deparment_id'      ,
        'address'           ,
        'profile_piture'    ,
    ];
    protected $attributes=[
        'is_active' =>0
    ];
}
