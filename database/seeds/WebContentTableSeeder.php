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
            'content' => 'Do you have great products and services to sell but don’t know who to sell them to? We can help!',
        ]);

        DB::table('web_contents')->insert([
            'content' => '<p>We are a thriving, problem solving, sales strategy and sales development firm. Our bread and butter is in distilling complex and non complex solutions, down to the customer levels and emerging as the trusted adviser in superman&#39;s cape, solving the customer&#39;s problems. In essence you may be a SMB or Enterprise client, and we would fire up your sales pipeline. Thru online (email/social media marketing) and strategic warm calling tactics, we build profitable sales pipelines, which generate leads, and accordingly close simple/complex sales cycles.</strong></p>

            <p><strong>We have worked on 50+ projects so far, whether in the Public or Private Sector, in manufacturing, healthcare, education, technology, etc. - we are experts at getting you qualified leads. As long as you have a value proposition and are solving a market need, we can align prospect pain points with unique selling points and build rapport by objection handling consistently. We are successful thru establishing KPI&#39;s (Key Performance Indicators) and achieving them!</strong></p>
            
            <p><strong>Instead of static results, we have been able to provide dynamic results, both for our clients and their clients.</p>',
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
            'content' => 'Brampton, Greater Toronto Area, Ontario L6S1H6',
        ]);

        DB::table('web_contents')->insert([
            'content' => '<p>Call Us :  1 647 470 2121, <br> 1 647 978 5444</p>',
        ]);

        DB::table('web_contents')->insert([
            'content' => '<p>Email: info@salesmaestro.ca</p>',
        ]);
    }
}
