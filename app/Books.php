<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo('App\BookCategory');
    }
}
