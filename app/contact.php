<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    //
    protected $table = "contacts";
    protected $fillable = ['name' ,'phone','email','subject','content'];


}
