<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RestaurentReviewRating extends Model
{
    use SoftDeletes;

    protected $table = 'restaurent_review_ratings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'review', 'rating_id', 'user_id', 'restaurent_id'
    ];

    /**
     * To get Restaurent Rating & Review By User.
     *
     * @return object 
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * To get Restaurent Rating & Review By User.
     *
     * @return object 
     */
    public function restaurent()
    {
        return $this->belongsTo(Restaurent::class);
    }
}
