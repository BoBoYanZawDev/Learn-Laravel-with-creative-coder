<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;
    protected $guarded=[];
    const STATUS_PENDING = 'pending';
    const STATUS_FINISHED = 'finished';
    const STATUS_CANCELED = 'canceled';

    // public function getStatusAttribute($value)
    // {
    //     return $value;
    // }

    // Order belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Order has many products
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_details')->withPivot('quantity');
    }
}
