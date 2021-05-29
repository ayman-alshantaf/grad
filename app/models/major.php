<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class major extends Model
{
    protected $table = "majors";
    protected $fillable = ['name' ,'category_id', 'created_at' , 'updated_at'];

    public function m_categories(){
        return $this->belongsTo(categorie::class , 'category_id' , 'id');
    }
}
