<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class city extends Model
{
    use SoftDeletes;

    protected $table = 'cities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get restaurents belongs to the city.
     *
     * @return object
     */
    public function restaurents()
    {
        return $this->hasMany(Restaurent::class);
    } 

}
