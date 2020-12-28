<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StoresInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores_info')->insert([
            'info_id' => 1,
            'name_en' => "Example Store",
            'name_zh' => "演示店铺",
            'ance_en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae nisl facilisis, egestas metus sit amet, bibendum nibh. Mauris nec urna id mi sodales sagittis. Phasellus bibendum enim quis turpis iaculis",
            'ance_zh' => "中文店铺announcement 测试测试"

        ]);

        DB::table('stores_info')->insert([
            'info_id' => 2,
            'name_en' => "Second Example Store",
            'name_zh' => "第二演示店铺",
            'ance_en' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae nisl facilisis, egestas metus sit amet, bibendum nibh. Mauris nec urna id mi sodales sagittis. Phasellus bibendum enim quis turpis iaculis",
            'ance_zh' => "中文店铺announcement 测试测试"
        ]);
    }
}
