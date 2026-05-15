<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->words(3, true) . ' ' . fake()->randomElement(['Chair', 'Table', 'Cabinet', 'Sofa', 'Shelf', 'Lamp', 'Bed', 'Desk']);
        $regular = fake()->randomFloat(2, 150_000, 25_000_000);
        $hasSale = fake()->boolean(40);
        $sale = $hasSale ? round($regular * fake()->randomFloat(2, 0.55, 0.9), 2) : null;

        $thumb = 'assets/images/placehold-400x400.svg';

        return [
            'name' => ucfirst($name),
            'slug' => Str::slug($name) . '-' . fake()->unique()->numerify('#####'),
            'category_id' => Category::query()->inRandomOrder()->value('id') ?? Category::factory(),
            'brand_id' => Brand::query()->inRandomOrder()->value('id') ?? Brand::factory(),
            'short_description' => fake()->sentence(8),
            'information' => fake()->sentence(12),
            'description' => fake()->paragraphs(3, true),
            'image' => $thumb,
            'images' => [
                'assets/images/placehold-400x400.svg',
                'assets/images/placehold-400x400.svg',
                'assets/images/placehold-400x400.svg',
            ],
            'regular_price' => $regular,
            'sale_price' => $sale,
            'quantity' => fake()->numberBetween(0, 200),
            'stock_status' => fake()->randomElement(['instock', 'outofstock']),
            'featured' => fake()->boolean(20),
        ];
    }
}
