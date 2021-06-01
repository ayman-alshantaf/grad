<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class governorate extends Model
{
    protected $table = "governorates";
    protected $fillable = ['name' , 'created_at' , 'updated_at'];

    public function postGovernorate(){
        return $this->hasMany(post::class, 'category_id' , 'id');
    }
    public function governorate(){
        return $this->hasMany(User::class, 'governorate_id' , 'id');
    }
}
