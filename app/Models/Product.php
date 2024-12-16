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

    public function scopeFilter($query){
        $query->where('name', 'LIKE', '%' . request('search') . '%')
        ->when(request('category') , function ($query) {
            $query->whereHas('category' ,function($query){
                return $query->where('id', request('category'));
            });
        })
        ->latest();
    }
}
