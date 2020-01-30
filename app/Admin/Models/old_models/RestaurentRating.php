<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RestaurentRating extends Model
{
    use SoftDeletes;

    protected $table = 'restaurent_ratings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rating_id', 'user_id', 'restaurent_id'
    ];

    

    /**
     * Get User for the given Rating.
     *
     * @return object
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get Restaurent for the given Rating.
     *
     * @return object
     */
    public function restaurent()
    {
        return $this->belongsTo(Restaurent::class);
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
