<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    //
    protected $guarded =['id'];

    public function Courses()
    {
        return $this->hasMany('App\Course');
    }
}
