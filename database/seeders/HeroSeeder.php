<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heros')->insert([
            [
                "titre"=>"Build Better Websites With Bikin",
                "soustitre"=>"We are team of talented designers making websites with Bootstrap",
                "btnstart"=>"Get Started",
                "img"=>"hero-img.png"

            ]
            ]);
    }
}
