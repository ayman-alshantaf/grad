<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class major extends Model
{
    protected $table = "majors";
    protected $fillable = ['name' ,'category_id', 'created_at' , 'updated_at'];

    public function m_categories(){
        return $this->belongsTo(categorie::class , 'category_id' , 'id');
    }
    public function postMajor(){
        return $this->hasMany(post::class, 'category_id' , 'id');
    }
    public function userMajor(){
        return $this->hasMany(User::class, 'category_id' , 'id');
    }

}
