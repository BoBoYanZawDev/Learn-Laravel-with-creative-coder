<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $clothes = Category::factory()->create([
            'name' => 'clothes'
        ]);
        $electronic  = Category::factory()->create([
            'name' => 'electronics'
        ]);
        Product::factory(20)->create([
            'category_id' => $clothes->id
        ]);
        Product::factory(20)->create([
            'category_id' => $electronic->id
        ]);

        Order::factory(2)
                ->hasAttached(
                    Product::factory()->count(3),
                    ['quantity' =>2],
                    'products'
                )->create();

        User::factory()->create([
            'email' => 'admin@gmail.com',
            'is_admin' => true
        ]);
    }
}
