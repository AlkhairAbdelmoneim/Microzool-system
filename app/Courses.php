<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = "courses";
    protected $fillable = ['id','name','date', 'course_duration', 'decs', 'image','teacher_id', 'price'];


    public function student()
    {

        return $this->hasOne('App\Students',  'course_id');

    }

}
// end of student
