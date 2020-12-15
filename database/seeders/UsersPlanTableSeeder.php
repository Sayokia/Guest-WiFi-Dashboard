<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_plan')->insert([
            'plan_id' => 1,
            'name' => 'Demo Plan For Test',
            'desc' => 'Test Plan with 3 devices and slider allowed. The max slider showing time is 3s',
            'max_device' => 3,
            'max_ad' => 3,
            'max_ad_time' => 3
        ]);
    }
}
