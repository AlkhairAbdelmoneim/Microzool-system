<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = "teahers";
    protected $fillable = ['name' ,'phone','address'];



}
