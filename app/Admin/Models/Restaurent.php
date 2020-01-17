<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurent extends Model
{
    use SoftDeletes;

    protected $table = 'restaurents';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'street', 'rating', 'country_id', 'state_id', 'city_id'
    ];

    /**
     * Relationship between state
     *
     * @var array
     */
    public function state()
    {
        
    }

}
