<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'sid' => 1,
            'name' => 'Hugo Cheng',
            'email' => 'cxh@dal.ca',
            'phone' => '9028175998',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'admin' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
