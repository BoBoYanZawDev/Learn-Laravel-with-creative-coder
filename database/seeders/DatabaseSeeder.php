<?php

namespace Database\Seeders;

use App\Models\Category;
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
    }
}
