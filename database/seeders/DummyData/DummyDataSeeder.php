<?php

namespace Database\Seeders\DummyData;

use Database\Seeders\DummyData\ProductCategorySeeder;
use Database\Seeders\DummyData\ProductSeeder;
use Database\Seeders\DummyData\ProductTagSeeder;
use Database\Seeders\DummyData\TagSeeder;
use Illuminate\Database\Seeder;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            ProductCategorySeeder::class,
            ProductSeeder::class,
            TagSeeder::class,
            ProductTagSeeder::class,
        ]);
    }
}
