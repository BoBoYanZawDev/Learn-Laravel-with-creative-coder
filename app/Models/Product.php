<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function category(){
    return  $this->belongsTo(Category::class);
    }

    public function scopeFilter($query ,$fliters){
        $query
        ->when(isset($fliters['search']), function ($query) use ($fliters){
            $query->where('name', 'LIKE', '%' . $fliters['search'] . '%');
        })
        ->when(isset($fliters['category']) , function ($query) use ($fliters) {
            $query->whereHas('category' ,function($query) use ($fliters) {
                return $query->where('id', $fliters['category']);
            });
        })
        ->latest();
    }
    public function cartUsers(){
        return $this->belongsToMany(User::class , 'carts')->withPivot('quantity');
    }

    // a product belongs to many orders
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_details')->withPivot('quantity');
    }
}
