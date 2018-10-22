<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $guarded =['id'];

    public function Category()
    {
        return $this->belongsTo('App\CourseCategory');
    }
        public function Resources()
    {
        return $this->hasMany('App\CourseResource');
    }
}
