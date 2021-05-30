<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $table = "categories";
    protected $fillable = ['name' , 'created_at' , 'updated_at'];

    public function m_categories(){
        return $this->hasMany(major::class, 'category_id' , 'id');
    }
    public function postCategory(){
        return $this->hasMany(post::class, 'category_id' , 'id');
    }
}
