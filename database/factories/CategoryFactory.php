<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->randomElement([
            'Kursi & Sofa',
            'Meja',
            'Lemari & Penyimpanan',
            'Tempat Tidur',
            'Lampu & Penerangan',
            'Dekorasi',
            'Rak & Partisi',
            'Outdoor',
            'Kantor',
            'Anak',
            'Dapur',
            'Kamar Mandi',
            'Ruang Tamu',
            'Ruang Makan',
            'Aksesoris',
        ]) . ' ' . fake()->numerify('###');

        return [
            'name' => $name,
            'slug' => Str::slug($name) . '-' . fake()->unique()->numerify('###'),
            'image' => 'assets/images/placehold-400x400.svg',
        ];
    }
}
