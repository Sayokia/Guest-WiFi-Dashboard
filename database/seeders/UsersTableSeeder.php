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

        DB::table('users')->insert([
            'sid' => 2,
            'name' => 'Yanlin Zhu',
            'email' => 'zyl@dal.ca',
            'phone' => '9024109631',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'admin' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'sid' => 0,
            'name' => 'Demo Admin',
            'email' => 'admin@example.com',
            'phone' => '9021234567',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'admin' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'sid' => 1,
            'name' => 'Demo User',
            'email' => 'user@example.com',
            'phone' => '9027654321',
            'email_verified_at' => now(),
            'password' => Hash::make('user'),
            'admin' => false,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
    }
}
