<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@gmail.com',
            'role' => 'customer',
        ]);

        Slider::create([
            'title' => 'Summer Collection',
            'tagline' => 'Discover our fresh summer outfits',
            'link' => '#',
            'image' => 'slider1.jpg',
        ]);
        Slider::create([
            'title' => 'Big Sale',
            'tagline' => 'Save up to 50% on selected items',
            'link' => '#',
            'image' => 'slider2.jpg',
        ]);
        Slider::create([
            'title' => 'New Arrivals',
            'tagline' => 'Check out the latest trends',
            'link' => '#',
            'image' => 'slider3.jpg',
        ]);

        Category::factory(10)->create();
        Brand::factory(10)->create();
        Product::factory(50)->create();
    }
}
