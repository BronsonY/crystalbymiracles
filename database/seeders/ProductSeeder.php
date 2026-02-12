<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use App\Models\Collection;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rawCrystals = Category::where('slug', 'raw-crystals')->first();
        $polishedStones = Category::where('slug', 'polished-stones')->first();
        $crystalPoints = Category::where('slug', 'crystal-points')->first();
        $crystalClusters = Category::where('slug', 'crystal-clusters')->first();

        $loveCollection = Collection::where('slug', 'love-harmony')->first();
        $energyCollection = Collection::where('slug', 'energy-focus')->first();
        $clarityCollection = Collection::where('slug', 'clarity-intuition')->first();
        $protectionCollection = Collection::where('slug', 'protection-grounding')->first();

        $products = [
            [
                'name' => 'Amethyst Cluster',
                'slug' => 'amethyst-cluster',
                'description' => 'Beautiful natural amethyst cluster with deep purple hues. Perfect for meditation and clarity.',
                'price' => 1200.00,
                'weight' => 150,
                'stock' => 5,
                'category_id' => $crystalClusters?->id,
                'is_featured' => true,
                'is_active' => true,
                'collections' => [$clarityCollection],
            ],
            [
                'name' => 'Rose Quartz Palm Stone',
                'slug' => 'rose-quartz-palm-stone',
                'description' => 'Smooth polished rose quartz palm stone. Promotes love and compassion.',
                'price' => 650.00,
                'weight' => 80,
                'stock' => 12,
                'category_id' => $polishedStones?->id,
                'is_featured' => true,
                'is_active' => true,
                'collections' => [$loveCollection],
            ],
            [
                'name' => 'Citrine Point',
                'slug' => 'citrine-point',
                'description' => 'Natural citrine crystal point. Known for abundance and positive energy.',
                'price' => 900.00,
                'weight' => 65,
                'stock' => 8,
                'category_id' => $crystalPoints?->id,
                'is_featured' => true,
                'is_active' => true,
                'collections' => [$energyCollection],
            ],
            [
                'name' => 'Black Tourmaline',
                'slug' => 'black-tourmaline',
                'description' => 'Raw black tourmaline crystal. Excellent for protection and grounding.',
                'price' => 700.00,
                'weight' => 120,
                'stock' => 10,
                'category_id' => $rawCrystals?->id,
                'is_featured' => true,
                'is_active' => true,
                'collections' => [$protectionCollection],
            ],
            [
                'name' => 'Clear Quartz Cluster',
                'slug' => 'clear-quartz-cluster',
                'description' => 'Stunning clear quartz cluster formation. Amplifies energy and intention.',
                'price' => 1500.00,
                'weight' => 200,
                'stock' => 4,
                'category_id' => $crystalClusters?->id,
                'is_featured' => false,
                'is_active' => true,
                'collections' => [$energyCollection, $clarityCollection],
            ],
            [
                'name' => 'Rhodonite Palm Stone',
                'slug' => 'rhodonite-palm-stone',
                'description' => 'Polished rhodonite with beautiful pink and black patterns. Emotional healing stone.',
                'price' => 550.00,
                'weight' => 70,
                'stock' => 15,
                'category_id' => $polishedStones?->id,
                'is_featured' => false,
                'is_active' => true,
                'collections' => [$loveCollection],
            ],
            [
                'name' => 'Lapis Lazuli Point',
                'slug' => 'lapis-lazuli-point',
                'description' => 'Deep blue lapis lazuli point. Enhances wisdom and truth.',
                'price' => 1100.00,
                'weight' => 90,
                'stock' => 6,
                'category_id' => $crystalPoints?->id,
                'is_featured' => false,
                'is_active' => true,
                'collections' => [$clarityCollection],
            ],
            [
                'name' => 'Obsidian Raw Stone',
                'slug' => 'obsidian-raw-stone',
                'description' => 'Natural black obsidian. Powerful protection and grounding stone.',
                'price' => 450.00,
                'weight' => 100,
                'stock' => 20,
                'category_id' => $rawCrystals?->id,
                'is_featured' => false,
                'is_active' => true,
                'collections' => [$protectionCollection],
            ],
        ];

        foreach ($products as $productData) {
            $collections = $productData['collections'] ?? [];
            unset($productData['collections']);

            $product = Product::create($productData);

            // Attach collections
            foreach ($collections as $collection) {
                if ($collection) {
                    $product->collections()->attach($collection->id);
                }
            }
        }
    }
}
