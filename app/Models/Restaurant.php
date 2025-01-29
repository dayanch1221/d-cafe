<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'location_id',
        'image',
        'phone_number',
        'opening_time',
        'closing_time',
    ];

    /**
     * Get the location that the restaurant belongs to.
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    /**
     * Get the orders associated with the restaurant.
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
