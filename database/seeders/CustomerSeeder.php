<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'phone' => '08755558888',
            'email' => 'admin@example.com',
            'password' => bcrypt('1111'),
            'user_role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        
    }
}
