<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class level extends Model
{
    use HasTranslations;
    public $translatable = ['name'];
    protected $table = "levels";
    protected $fillable = ['name' , 'created_at' , 'updated_at'];
}
