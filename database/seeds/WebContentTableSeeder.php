<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('web_contents')->insert([
            'content' => '/frontend/img/carousel1.jpeg',
        ]);

        DB::table('web_contents')->insert([
            'content' => '/frontend/img/carousel2.jpeg',
        ]);

        DB::table('web_contents')->insert([
            'content' => '/frontend/img/carousel3.jpeg',
        ]);

        DB::table('web_contents')->insert([
            'content' => 'EVENTS. ENTERTAINMENT. EXPERIENCE.',
        ]);

        DB::table('web_contents')->insert([
            'content' => '<p>Tiger IT Consulting is an American-Bangladeshi worldwide consulting firm specializing in IT Services, Consulting, and Digital Solutions serving the public and private sector. We work with our clients to create a compelling information technology strategy by employing a passionate international workforce that uses bold and innovative techniques to execute and deliver impactful results. Our client focused teams are dedicated to understanding and delivering end-to-end digital transformation strategies that enable our clients to be more confident in their technology capabilities.</div></p>',
        ]);

        DB::table('web_contents')->insert([
            'content' => 'EVENTS',
        ]);

        DB::table('web_contents')->insert([
            'content' => 'DESIGN & PRODUCTION',
        ]);

        DB::table('web_contents')->insert([
            'content' => 'INTERNATIONAL ARTISTS',
        ]);

        DB::table('web_contents')->insert([
            'content' => 'PR & DATABASE',
        ]);

        DB::table('web_contents')->insert([
            'content' => 'BRAND BUILDING',
        ]);

        DB::table('web_contents')->insert([
            'content' => 'Lorem ipsum dolor sit amet. Facilis, ullam velit quod delectus beatae quia nam culpa? quod delectus beatae quia nam culpa?',
        ]);

        DB::table('web_contents')->insert([
            'content' => 'Lorem ipsum dolor sit amet. Facilis, ullam velit quod delectus beatae quia nam culpa? quod delectus beatae quia nam culpa?',
        ]);

        DB::table('web_contents')->insert([
            'content' => 'Lorem ipsum dolor sit amet. Facilis, ullam velit quod delectus beatae quia nam culpa? quod delectus beatae quia nam culpa?',
        ]);

        DB::table('web_contents')->insert([
            'content' => 'Lorem ipsum dolor sit amet. Facilis, ullam velit quod delectus beatae quia nam culpa? quod delectus beatae quia nam culpa?',
        ]);

        DB::table('web_contents')->insert([
            'content' => 'Lorem ipsum dolor sit amet. Facilis, ullam velit quod delectus beatae quia nam culpa? quod delectus beatae quia nam culpa?',
        ]);

        DB::table('web_contents')->insert([
            'content' => 'Dhaka, Bangladesh',
        ]);

        DB::table('web_contents')->insert([
            'content' => '<p>Call Us : 017*******, <br>019********</p>',
        ]);

        DB::table('web_contents')->insert([
            'content' => '<p>Email: tigerit@gmail.com</p>',
        ]);
    }
}
