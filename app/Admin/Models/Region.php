<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    use SoftDeletes;

    protected $table = 'regions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function restaurent()
    {
        return $this->belongsToMany(Restaurent::class)->withTimestamps()->withPivot('deleted_at');
    }
}
