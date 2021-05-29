<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class governorate extends Model
{
    protected $table = "governorates";
    protected $fillable = ['name' , 'created_at' , 'updated_at'];
}
