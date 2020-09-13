<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    //courses relation
    public function students()
    {
        return $this->belongsToMany('App\Student','course_student','course_id','student_id');
    }
    public function comments()
    {
        return $this->hasMany('App\Lesson');
    }
}
