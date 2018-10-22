<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    //
    protected $guarded = ['id'];

    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
