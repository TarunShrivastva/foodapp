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
        'name', 'street', 'rating_id', 'country_id', 'state_id', 'city_id'
    ];

    /**
     * Get state for the restaurent
     *
     * @return  object
     */
    public function state()
    {
        return  $this->belongsTo(State::class);
    }

    /**
     * Get country for the restaurent
     *
     * @return  object
     */
    public function country()
    {
        return  $this->belongsTo(Country::class);
    }

    /**
     * Get city for the restaurent
     *
     * @return  object
     */
    public function city()
    {
        return  $this->belongsTo(City::class);
    }

    /**
     * Get the food available in the restaurent.
     *
     * @return object
     */
    public function foods()
    {
        return $this->belongsToMany(Food::class)->withTimestamps()->withPivot('deleted_at');
    }

    /**
     * Get rating for the restaurent
     *
     * @return  object
     */
    public function rating()
    {
        return  $this->belongsTo(Rating::class);
    }

}
