<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    //
    protected $table = "payments";

    protected $fillable = ['name','phone' ,'process_num','eshaar'];

    protected $appends = ['image_path'];

    function getImagePathAttribute(){

        return asset('uploads/img/payments/' .$this->eshaar);
        
    }
}
