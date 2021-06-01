<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = "posts";
    protected $fillable = ['name' ,'title', 'description', 'category_id', '	major_id','user_id','training_time',
        'skills','desc_place', 'major_id', 'final_date' ,'governorate_id','created_at' , 'updated_at'];

    public function postCategory(){
        return $this->belongsTo(categorie::class , 'category_id' , 'id');
    }
    public function postMajor(){
        return $this->belongsTo(major::class , 'major_id' , 'id');
    }
    public function postGovernorate(){
    return $this->belongsTo(governorate::class , 'governorate_id' , 'id');
}
    public function postUser(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
    public function speechPost(){
        return $this->hasMany(speech::class , 'post_id' , 'id');
    }

}
