<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function cartProducts()
    {
        return $this->belongsToMany(Product::class, 'carts')->withPivot('quantity');
    }

    public function getTotalPrice()
    {
        $totalPrice = 0;
        $productPriceWithQuantity = $this->cartProducts->map(function ($product) {
            return [
                'price' => $product->price,
                'quantity' => $product->pivot->quantity
            ];
        });
        $productPriceWithQuantity->each(function ($product) use (&$totalPrice) {
            $totalPrice += $product['price'] * $product['quantity'];
        });
        return $totalPrice;
    }

    //a user hasMany Orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
