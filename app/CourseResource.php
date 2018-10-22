<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseResource extends Model
{
    //
    protected $guarded =['id'];

    public function Course()
    {
        return $this->belongsTo('App\Course');
    }
}
