<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                "titre"=>"Voluptatem dignissimos provident quasi",
                "paragraphe"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit",
                "link"=>"About us",
                "icon1"=>"bx bx-receipt",
                "petittitre1"=>"Corporis voluptates sit",
                "petitparagraphe1"=>"Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip",
                "icon2"=>"bx bx-cube-alt",
                "petittitre2"=>"Ullamco laboris nisi",
                "petitparagraphe2"=>"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt",
                "icon3"=>"bx bx-images",
                "petittitre3"=>"Labore consequatur",
                "petitparagraphe3"=>"Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere",
                "icon4"=>"bx bx-shield",
                "petittitre4"=>"Beatae veritatis",
                "petitparagraphe4"=>"Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta"

            ]
        ]);
    }
}
