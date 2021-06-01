<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class speech extends Model
{
    protected $table = "studentpost";
    protected $fillable = ['speech' ,'user_s_id','post_id', 'cv_user','company_id','created_at' , 'updated_at'];

    public function speechPost(){
        return $this->belongsTo(post::class , 'post_id' , 'id');
    }
}
