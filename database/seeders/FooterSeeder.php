<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'nom' => 'Bikin',
            'adress' => ' A108 Adam Street',
            'adress2' => 'New York, NY 535022',
            'ville' => 'United States',
            'tel' => 'Phone:',
            'numtel' => '+1 5589 55488 55',
            'email' => 'Email:',
            'emailadress' => 'info@example.com',
            'links' => 'Useful Links',
            'link1' => 'Home',
            'link2' => 'About us',
            'link3' => 'Services',
            'link4' => 'Terms of service',
            'link5' => 'Privacy policy',
            'services' => 'Our Services',
            'link6' => 'Web Design',
            'link7' => 'Web Development',
            'link8' => 'Product Management',
            'link9' => 'Marketing',
            'link10' => 'Graphic Design',
            'newsletter' => 'Join Our Newsletter',
            'newsletterdescription' => 'Tamen quem nulla quae legam multos aute sint culpa legam noster magna',
            'copy1' => 'Copyright',
            'copy2' => 'Bikin',
            'copy3' => ' All Rights Reserved',
            'credits' => 'Designed by',
            'credits2' => 'BootstrapMade',
        ]);
    }
}
