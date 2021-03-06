<?php

namespace App;

use App\models\categorie;
use App\models\governorate;
use App\models\major;
use App\models\post;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','is_admin','is_company','created_at','updated_at',
        'mobile','about_us','level_id','image','skills','completeProfile','governorate_id','category_id','major_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function postUser(){
        return $this->hasMany(post::class , 'user_id' , 'id');
    }
    public function governorate(){
        return $this->belongsTo(governorate::class , 'governorate_id' , 'id');
    }
    public function userCategory(){
        return $this->belongsTo(categorie::class , 'category_id' , 'id');
    }
    public function userMajor(){
        return $this->belongsTo(major::class , 'major_id' , 'id');
    }
}
