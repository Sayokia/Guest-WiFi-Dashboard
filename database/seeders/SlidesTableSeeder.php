<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->insert([
            'id' => 1,
            'sid' => 1,
            'img' => 'uploads/images/carousel/1/1_1609113049.jpg',
            'created_at' => '2020-12-27 23:50:49',
            'updated_at' => '2020-12-27 23:50:49'
        ]);

        DB::table('slides')->insert([
            'id' => 2,
            'sid' => 1,
            'img' => 'uploads/images/carousel/1/1_1609113064.jpg',
            'created_at' => '2020-12-27 23:51:04',
            'updated_at' => '2020-12-27 23:51:04'
        ]);

        DB::table('slides')->insert([
            'id' => 3,
            'sid' => 1,
            'img' => 'uploads/images/carousel/1/1_1609113075.jpg',
            'created_at' => '2020-12-27 23:51:15',
            'updated_at' => '2020-12-27 23:51:15'
        ]);
    }
}