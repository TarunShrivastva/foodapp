<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    use SoftDeletes;

    protected $table = 'ratings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rating',
    ];

    /**
     * Get restaurents belongs to country.
     *
     * @return object
     */
    public function restaurents()
    {
        return $this->hasMany(Restaurent::class);
    }

}
