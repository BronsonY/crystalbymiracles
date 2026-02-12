<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Raw Crystals',
                'slug' => 'raw-crystals',
                'description' => 'Natural, unpolished crystals in their raw form',
                'is_active' => true,
            ],
            [
                'name' => 'Polished Stones',
                'slug' => 'polished-stones',
                'description' => 'Smooth, polished gemstones and palm stones',
                'is_active' => true,
            ],
            [
                'name' => 'Crystal Jewelry',
                'slug' => 'crystal-jewelry',
                'description' => 'Handcrafted jewelry featuring natural crystals',
                'is_active' => true,
            ],
            [
                'name' => 'Crystal Points',
                'slug' => 'crystal-points',
                'description' => 'Pointed crystals perfect for energy work',
                'is_active' => true,
            ],
            [
                'name' => 'Crystal Clusters',
                'slug' => 'crystal-clusters',
                'description' => 'Beautiful crystal cluster formations',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
