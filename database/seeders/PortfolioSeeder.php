<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'titre' => 'Portfolio' ,
            'description' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas' ,
            'link1' => 'All' ,
            'link2' => 'App' ,
            'link3' => 'Card' ,
            'link4' => 'Web' ,
            'titreimg1' => 'App 1' ,
            'soustitreimg1' => 'App' ,
            'img1' => '/img/portfolio/portfolio-1.jpg' ,
            'icon1img' => 'bx bx-plus' ,
            'iccon2img' => 'bx bx-link' ,
            'titreimg2' => 'Web 3' ,
            'soustitreimg2' => 'Web' ,
            'img2' => '/img/portfolio/portfolio-2.jpg' ,
            'titreimg3' => 'App 2' ,
            'soustitreimg3' => 'App' ,
            'img3' => '/img/portfolio/portfolio-3.jpg' ,
            'titreimg4' => 'Card 2' ,
            'soustitreimg4' => 'Card' ,
            'img4' => '/img/portfolio/portfolio-4.jpg' ,
            'titreimg5' => 'Web 2' ,
            'soustitreimg5' => 'Web' ,
            'img5' => '/img/portfolio/portfolio-5.jpg' ,
            'titreimg6' => 'App 3' ,
            'soustitreimg6' => 'App' ,
            'img6' => '/img/portfolio/portfolio-6.jpg' ,
            'titreimg7' => 'Card 1' ,
            'soustitreimg7' => 'Card' ,
            'img7' => '/img/portfolio/portfolio-7.jpg' ,
            'titreimg8' => 'Card 3' ,
            'soustitreimg8' => 'Card' ,
            'img8' => '/img/portfolio/portfolio-8.jpg' ,
            'titreimg9' => 'Web 3' ,
            'soustitreimg9' => 'Web' ,
            'img9' => '/img/portfolio/portfolio-9.jpg' ,
        ]);
    }
}
