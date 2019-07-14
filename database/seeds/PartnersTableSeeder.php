<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            'name' => 'Le Name',
            'type' => 'local',
            'img' => '/frontend/img/partner1.png',
        ]);

        DB::table('partners')->insert([
            'name' => 'Le Name',
            'type' => 'local',
            'img' => '/frontend/img/partner2.png',
        ]);

        DB::table('partners')->insert([
            'name' => 'Le Name',
            'type' => 'local',
            'img' => '/frontend/img/partner3.png',
        ]);

        DB::table('partners')->insert([
            'name' => 'Le Name',
            'type' => 'local',
            'img' => '/frontend/img/partner4.png',
        ]);

        DB::table('partners')->insert([
            'name' => 'Le Name',
            'type' => 'local',
            'img' => '/frontend/img/carousel2.jpeg',
        ]);

        DB::table('partners')->insert([
            'name' => 'Le Name',
            'type' => 'local',
            'img' => '/frontend/img/carousel3.jpeg',
        ]);

        DB::table('partners')->insert([
            'name' => 'Le Name',
            'type' => 'international',
            'img' => '/frontend/img/carousel1.jpeg',
        ]);

        DB::table('partners')->insert([
            'name' => 'Le Name',
            'type' => 'international',
            'img' => '/frontend/img/carousel2.jpeg',
        ]);

        DB::table('partners')->insert([
            'name' => 'Le Name',
            'type' => 'international',
            'img' => '/frontend/img/carousel3.jpeg',
        ]);

        DB::table('partners')->insert([
            'name' => 'Le Name',
            'type' => 'international',
            'img' => '/frontend/img/carousel1.jpeg',
        ]);

        DB::table('partners')->insert([
            'name' => 'Le Name',
            'type' => 'international',
            'img' => '/frontend/img/carousel2.jpeg',
        ]);

        DB::table('partners')->insert([
            'name' => 'Le Name',
            'type' => 'international',
            'img' => '/frontend/img/carousel3.jpeg',
        ]);
    }
}
