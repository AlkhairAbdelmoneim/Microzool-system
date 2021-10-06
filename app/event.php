<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    //
    protected $table = "events";
    protected $fillable = ['id','name','date', 'event_duration', 'decs', 'image', 'price'];


}
