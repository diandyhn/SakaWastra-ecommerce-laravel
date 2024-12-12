<?php

namespace Database\Seeders\DummyData;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTagSeeder extends Seeder
{
    public function run()
    {
        DB::table('product_tag')->insert([
            ['id' => 1, 'product_id' => 1, 'tag_id' => 1, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 2, 'product_id' => 2, 'tag_id' => 1, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 3, 'product_id' => 3, 'tag_id' => 1, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 4, 'product_id' => 4, 'tag_id' => 2, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 5, 'product_id' => 5, 'tag_id' => 2, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 6, 'product_id' => 6, 'tag_id' => 2, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 7, 'product_id' => 7, 'tag_id' => 3, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 8, 'product_id' => 8, 'tag_id' => 3, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 9, 'product_id' => 9, 'tag_id' => 3, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 10, 'product_id' => 10, 'tag_id' => 4, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 11, 'product_id' => 11, 'tag_id' => 4, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 12, 'product_id' => 12, 'tag_id' => 4, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 13, 'product_id' => 13, 'tag_id' => 5, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 14, 'product_id' => 14, 'tag_id' => 5, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 15, 'product_id' => 15, 'tag_id' => 5, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 16, 'product_id' => 16, 'tag_id' => 6, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 17, 'product_id' => 17, 'tag_id' => 6, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 18, 'product_id' => 18, 'tag_id' => 6, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 19, 'product_id' => 19, 'tag_id' => 7, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 20, 'product_id' => 20, 'tag_id' => 7, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 21, 'product_id' => 21, 'tag_id' => 7, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 22, 'product_id' => 22, 'tag_id' => 8, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 23, 'product_id' => 23, 'tag_id' => 8, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
            ['id' => 24, 'product_id' => 24, 'tag_id' => 8, 'created_at' => '2024-10-23 15:55:19', 'updated_at' => '2024-10-23 15:55:19'],
        ]);
    }
}
