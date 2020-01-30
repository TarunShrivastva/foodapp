<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status', 'restaurent_id', 'user_id',
    ];

    /**
     * Get country belongs to the food 
     *
     * @return  object
     */
    public function food()
    {
        return $this->belongsToMany(Food::class)->withTimestamps()->withPivot('deleted_at');
    }
    

    /**
     * Get country belongs to the food 
     *
     * @return  object
     */
    public function restaurent()
    {
        return  $this->belongsTo(Restaurent::class);
    }

    /**
     * Get country belongs to the food 
     *
     * @return  object
     */
    public function user()
    {
        return  $this->belongsTo(User::class);
    }
}
