<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = "posts";
    protected $fillable = ['name' ,'title', 'description', 'category_id', '	major_id'
        , 'major_id', 'final_date' ,'governorate_id','created_at' , 'updated_at'];

    public function m_categories(){
        return $this->belongsTo(categorie::class , 'category_id' , 'id');
    }
}
