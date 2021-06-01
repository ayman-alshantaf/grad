<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class contactUs extends Model
{
    protected $table = "contentus";
    protected $fillable = ['name' ,'speech', 'mobile','email'];
}
