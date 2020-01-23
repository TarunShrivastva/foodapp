<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{
    use SoftDeletes;

    protected $table = 'foods';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category_id', 'subcategory_id','image', 'price', 'restaurent_id'
    ];

    /**
     * get state belong to the food
     *
     * @return  object
     */
    public function state()
    {
        return  $this->belongsTo(State::class);
    }

    /**
     * Get country belongs to the food 
     *
     * @return  object
     */
    public function country()
    {
        return  $this->belongsTo(Country::class);
    }

    /**
     * Get city belongs to the food 
     *gs 
     * @return  object
     */
    public function city()
    {
        return  $this->belongsTo(City::class);
    }

    /**
     * Get food belongs to the order 
     *
     * @return  object
     */
    public function order()
    {
        return $this->belongsToMany(Order::class)->withTimestamps()->withPivot('deleted_at');
    }

}
