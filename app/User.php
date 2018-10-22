<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =
        [
            'name',
            'email',
            'password',
            'firstName',
            'lastName',
            'phone',
            'nationality',
            'dateOfBirth',
            'gender',
            'status',
            'role_id',
            'institution_id',
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Institution()
    {
        return $this->belongsTo('App\Institution');
    }
    public function Role()
    {
        return $this->belongsTo('App\Role');

    }
    public function event()
    {
        return $this->belongsTo('App\TraingAndEvent');
    }


}
