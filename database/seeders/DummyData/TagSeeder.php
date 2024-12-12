<?php

namespace Database\Seeders\DummyData;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    public function run()
    {
        DB::table('tags')->insert([
            ['id' => 1, 'name' => 'garutan', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 2, 'name' => 'geblek renteng', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 3, 'name' => 'gentongan', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 4, 'name' => 'jagatan pisang', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 5, 'name' => 'kawung', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 6, 'name' => 'kraton', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 7, 'name' => 'lasem', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 8, 'name' => 'mega mendung', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 9, 'name' => 'parang', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 10, 'name' => 'piring sedapur', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 11, 'name' => 'priyangan', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 12, 'name' => 'sekar jagad', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 13, 'name' => 'sidoluhur', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 14, 'name' => 'sidomukti', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 15, 'name' => 'simbut', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 16, 'name' => 'singa barong', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 17, 'name' => 'sogan', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 18, 'name' => 'tambal', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 19, 'name' => 'tubo', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 20, 'name' => 'tujuh rupa', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
            ['id' => 21, 'name' => 'ulamsari mas', 'created_at' => '2024-10-23 15:08:04', 'updated_at' => '2024-10-23 15:08:04'],
        ]);
    }
}
