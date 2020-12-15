<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            'name' => 'Demo Store For Test',
            'address' => 'Halifax, Nova Scotia, Canada  B3H 4R2',
            'info_id' => 1,
            'plan_id' => 1
        ]);
    }
}
