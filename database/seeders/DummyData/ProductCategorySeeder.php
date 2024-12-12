<?php

namespace Database\Seeders\DummyData;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                'id' => 1,
                'name' => 'Batik',
                'slug' => 'Batik',
                'parent_category_id' => null,
                'description' => 'kain yang memiliki gambar atau pola yang dibuat dengan teknik khusus, sehingga memiliki ciri khas tersendiri',
                'image' => null,
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null
            ],
            [
                'id' => 2,
                'name' => 'Tenun',
                'slug' => 'Tenun',
                'parent_category_id' => null,
                'description' => 'kerajinan tangan yang menghasilkan kain dari benang yang dimasukkan secara melintang ke dalam lungsin, yaitu jajaran benang yang terpasang membujur',
                'image' => null,
                'created_at' => '2024-10-19 10:54:14',
                'updated_at' => '2024-10-19 10:54:14',
                'team_id' => null
            ],
        ]);
    }
}
