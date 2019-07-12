<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin@techynaf.com',
            'password' => bcrypt('bangladesh'),
            'role' => 'super-admin',
            'verified' => 1,
        ]);
    }
}
