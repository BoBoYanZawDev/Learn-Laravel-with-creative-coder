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
        $clothes = Category::factory([
            'name' => 'clothes'
        ]);
        dd($clothes);
        $electronics = Category::factory([
            'name' => 'electronics'
        ]);

       Product::factory()->create([
        dd($clothes)
         
       ]);
       Category::factory()->create([
            'name' => "clothes"
       ]);
    }
}
