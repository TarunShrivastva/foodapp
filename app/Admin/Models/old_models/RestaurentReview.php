<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RestaurentReview extends Model
{
    use SoftDeletes;

    protected $table = 'restaurent_reviews';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'review', 'user_id', 'restaurent_id'
    ];

    /**
     * Get User for the given Review.
     *
     * @return object
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get Restaurent for the given Review.
     *
     * @return object
     */
    public function restaurent()
    {
        return $this->belongsTo(Restaurent::class);
    }

}
