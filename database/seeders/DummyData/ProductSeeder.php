<?php

namespace Database\Seeders\DummyData;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Garutan',
                'price' => 24999.99,
                'short_description' => 'Reliable and fuel-efficient family sedan.',
                'long_description' => 'Non itaque tempore consectetur illo deleniti. Et consequatur ut itaque dolorem itaque nemo. Minima non et incidunt dolorem tenetur voluptatem.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'garutan1.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 2,
                'name' => 'Garutan',
                'price' => 26999.99,
                'short_description' => 'Sleek design with excellent safety features.',
                'long_description' => 'Consequatur et odit quos. Aliquid doloremque possimus consequuntur ipsam est eos eius. Tempore nemo odit repellendus reiciendis id.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'garutan2.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 3,
                'name' => 'Garutan',
                'price' => 23999.99,
                'short_description' => 'Stylish sedan with advanced driver-assist features.',
                'long_description' => 'Id illum accusamus fuga quis. Qui reiciendis ut officiis error consequuntur sunt aliquid.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'garutan3.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 4,
                'name' => 'Geblek Renteng',
                'price' => 22999.99,
                'short_description' => 'Comfortable midsize sedan with a tech-packed interior.',
                'long_description' => 'Occaecati aut deserunt expedita dicta veritatis. Labore nihil ipsam nisi ut mollitia aut. Autem et suscipit modi omnis. Aspernatur doloremque labore dolores ab.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'geblekrenteng1.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 5,
                'name' => 'Geblek Renteng',
                'price' => 24999.99,
                'short_description' => 'Sporty sedan with excellent handling and efficiency.',
                'long_description' => 'A ipsum aperiam aut quia commodi. Molestiae quo sit quia hic distinctio ut et. Qui ducimus aliquid corporis culpa facilis consectetur qui.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'geblekrenteng2.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 6,
                'name' => 'Geblek Renteng',
                'price' => 39999.99,
                'short_description' => 'Spacious and powerful SUV for off-road and family trips.',
                'long_description' => 'Qui ut architecto accusantium aspernatur voluptatum animi. Vel necessitatibus ipsum quis consequatur voluptatem. Rem molestiae qui laborum veniam.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'geblekrenteng3.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 7,
                'name' => 'Gentongan',
                'price' => 34999.99,
                'short_description' => 'Rugged off-road performance with an iconic design.',
                'long_description' => 'Illo quia et voluptas nesciunt laudantium commodi. Deleniti consequatur non et eius vel. Commodi modi perspiciatis perspiciatis ad vitae consequatur.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'gentongan1.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 8,
                'name' => 'Gentongan',
                'price' => 30999.99,
                'short_description' => 'Compact SUV with hybrid options and excellent fuel economy.',
                'long_description' => 'Quis aliquid aut architecto eligendi nihil assumenda dignissimos. Aut tempora ducimus quia sed fugiat ipsam aliquam impedit. Dicta veritatis perspiciatis omnis vero sit similique. Illo autem tempora soluta est corporis dolor rem dicta.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'gentongan2.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 9,
                'name' => 'Gentongan',
                'price' => 32999.99,
                'short_description' => 'Spacious and safe SUV with a smooth ride.',
                'long_description' => 'Et quis consequatur omnis alias aut maxime ratione. Vero odit recusandae ab et et et laboriosam. Aspernatur qui vel sunt praesentium ut quam ut repellat. Ducimus eligendi a pariatur velit.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'gentongan3.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 10,
                'name' => 'Jagatan Pisang',
                'price' => 49999.99,
                'short_description' => 'Large full-size SUV with plenty of space and towing power.',
                'long_description' => 'Et in expedita dignissimos id. Et vitae nostrum natus provident. Explicabo eos in modi odit. Ullam aut incidunt ex vel.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'jagatanpisang1.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 11,
                'name' => 'Jagatan Pisang',
                'price' => 49999.99,
                'short_description' => 'Large full-size SUV with plenty of space and towing power.',
                'long_description' => 'Et in expedita dignissimos id. Et vitae nostrum natus provident. Explicabo eos in modi odit. Ullam aut incidunt ex vel.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'jagatanpisang2.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 12,
                'name' => 'Jagatan Pisang',
                'price' => 49999.99,
                'short_description' => 'Large full-size SUV with plenty of space and towing power.',
                'long_description' => 'Et in expedita dignissimos id. Et vitae nostrum natus provident. Explicabo eos in modi odit. Ullam aut incidunt ex vel.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'jagatanpisang3.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 13,
                'name' => 'Kawung',
                'price' => 49999.99,
                'short_description' => 'Large full-size SUV with plenty of space and towing power.',
                'long_description' => 'Et in expedita dignissimos id. Et vitae nostrum natus provident. Explicabo eos in modi odit. Ullam aut incidunt ex vel.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'kawung1.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 14,
                'name' => 'Kawung',
                'price' => 49999.99,
                'short_description' => 'Large full-size SUV with plenty of space and towing power.',
                'long_description' => 'Et in expedita dignissimos id. Et vitae nostrum natus provident. Explicabo eos in modi odit. Ullam aut incidunt ex vel.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'kawung2.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 15,
                'name' => 'Kawung',
                'price' => 49999.99,
                'short_description' => 'Large full-size SUV with plenty of space and towing power.',
                'long_description' => 'Et in expedita dignissimos id. Et vitae nostrum natus provident. Explicabo eos in modi odit. Ullam aut incidunt ex vel.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'kawung3.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 16,
                'name' => 'Kraton',
                'price' => 49999.99,
                'short_description' => 'Large full-size SUV with plenty of space and towing power.',
                'long_description' => 'Et in expedita dignissimos id. Et vitae nostrum natus provident. Explicabo eos in modi odit. Ullam aut incidunt ex vel.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'kraton1.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 17,
                'name' => 'Kraton',
                'price' => 49999.99,
                'short_description' => 'Large full-size SUV with plenty of space and towing power.',
                'long_description' => 'Et in expedita dignissimos id. Et vitae nostrum natus provident. Explicabo eos in modi odit. Ullam aut incidunt ex vel.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'kraton2.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 18,
                'name' => 'Kraton',
                'price' => 49999.99,
                'short_description' => 'Large full-size SUV with plenty of space and towing power.',
                'long_description' => 'Et in expedita dignissimos id. Et vitae nostrum natus provident. Explicabo eos in modi odit. Ullam aut incidunt ex vel.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'kraton3.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 19,
                'name' => 'Lasem',
                'price' => 49999.99,
                'short_description' => 'Large full-size SUV with plenty of space and towing power.',
                'long_description' => 'Et in expedita dignissimos id. Et vitae nostrum natus provident. Explicabo eos in modi odit. Ullam aut incidunt ex vel.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'lasem1.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 20,
                'name' => 'Lasem',
                'price' => 49999.99,
                'short_description' => 'Large full-size SUV with plenty of space and towing power.',
                'long_description' => 'Et in expedita dignissimos id. Et vitae nostrum natus provident. Explicabo eos in modi odit. Ullam aut incidunt ex vel.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'lasem2.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 21,
                'name' => 'Lasem',
                'price' => 49999.99,
                'short_description' => 'Large full-size SUV with plenty of space and towing power.',
                'long_description' => 'Et in expedita dignissimos id. Et vitae nostrum natus provident. Explicabo eos in modi odit. Ullam aut incidunt ex vel.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'lasem3.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 22,
                'name' => 'Mega Mendung',
                'price' => 49999.99,
                'short_description' => 'Large full-size SUV with plenty of space and towing power.',
                'long_description' => 'Et in expedita dignissimos id. Et vitae nostrum natus provident. Explicabo eos in modi odit. Ullam aut incidunt ex vel.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'megamendung1.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 23,
                'name' => 'Mega Mendung',
                'price' => 49999.99,
                'short_description' => 'Large full-size SUV with plenty of space and towing power.',
                'long_description' => 'Et in expedita dignissimos id. Et vitae nostrum natus provident. Explicabo eos in modi odit. Ullam aut incidunt ex vel.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'megamendung2.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ],
            [
                'id' => 24,
                'name' => 'Mega Mendung',
                'price' => 49999.99,
                'short_description' => 'Large full-size SUV with plenty of space and towing power.',
                'long_description' => 'Et in expedita dignissimos id. Et vitae nostrum natus provident. Explicabo eos in modi odit. Ullam aut incidunt ex vel.',
                'category_id' => 1,
                'is_variable' => 0,
                'is_grouped' => 0,
                'is_simple' => 1,
                'is_featured' => 0,
                'featured_image' => 'megamendung3.png',
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null,
                'inventory_count' => 20
            ]
        ]);
    }
}