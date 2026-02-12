<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collections = [
            [
                'name' => 'Love & Harmony',
                'slug' => 'love-harmony',
                'description' => 'Rose Quartz, Rhodonite & supportive crystals to open the heart.',
                'icon' => '🫧',
                'is_active' => true,
            ],
            [
                'name' => 'Energy & Focus',
                'slug' => 'energy-focus',
                'description' => 'Citrine, Clear Quartz and grounding points to charge your workspace.',
                'icon' => '✨',
                'is_active' => true,
            ],
            [
                'name' => 'Protection & Grounding',
                'slug' => 'protection-grounding',
                'description' => 'Black Tourmaline, Obsidian and protective stones for stability.',
                'icon' => '🛡️',
                'is_active' => true,
            ],
            [
                'name' => 'Clarity & Intuition',
                'slug' => 'clarity-intuition',
                'description' => 'Amethyst, Lapis Lazuli and stones for mental clarity.',
                'icon' => '🔮',
                'is_active' => true,
            ],
        ];

        foreach ($collections as $collection) {
            Collection::create($collection);
        }
    }
}
