<?php

namespace Database\Seeders;

use App\Models\User;
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
        // Create admin user first
        $this->call(AdminUserSeeder::class);

        // Create categories and collections
        $this->call(CategorySeeder::class);
        $this->call(CollectionSeeder::class);

        // Create products (depends on categories and collections)
        $this->call(ProductSeeder::class);
    }
}
