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
            ['titreimg' => 'App 1' ,
            'categorie' => 'App' ,
            'img' => '/img/portfolio/portfolio-1.jpg'],
            ['titreimg' => 'App 1' ,
            'categorie' => 'App' ,
            'img' => '/img/portfolio/portfolio-2.jpg'],
            ['titreimg' => 'Web 3' ,
            'categorie' => 'Web' ,
            'img' => '/img/portfolio/portfolio-3.jpg'],
            ['titreimg' => 'App 2' ,
            'categorie' => 'App' ,
            'img' => '/img/portfolio/portfolio-4.jpg'],
            ['titreimg' => 'Card 2' ,
            'categorie' => 'Card' ,
            'img' => '/img/portfolio/portfolio-5.jpg'],
            ['titreimg' => 'Web 2' ,
            'categorie' => 'Web' ,
            'img' => '/img/portfolio/portfolio-6.jpg'],
            ['titreimg' => 'Card 1' ,
            'categorie' => 'Card' ,
            'img' => '/img/portfolio/portfolio-7.jpg'],
            ['titreimg' => 'Card 3' ,
            'categorie' => 'Card' ,
            'img' => '/img/portfolio/portfolio-8.jpg'],
            ['titreimg' => 'Web 3' ,
            'categorie' => 'Web' ,
            'img' => '/img/portfolio/portfolio-9.jpg'],

        ]);
    }
}
