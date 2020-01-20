<?php

namespace App\Admin\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * To get Restaurents Rating By User.
     *
     * @return object
     */
    public function restaurentRating()
    {
        return $this->hasMany(RestaurentRating::class, 'user_id');
    }

    /**
     * To get Restaurents Review By User.
     *
     * @return object
     */
    public function restaurentReview()
    {
        return $this->hasMany(RestaurentReview::class, 'user_id');
    }

}
