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
               
                
                "icon1"=>"bx bx-receipt",
                "petittitre1"=>"Corporis voluptates sit",
                "petitparagraphe1"=>"Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip",

            ],
            [
                "icon1"=>"bx bx-cube-alt",
                "petittitre1"=>"Ullamco laboris nisi",
                "petitparagraphe1"=>"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt",
            ],
            [
                "icon1"=>"bx bx-images",
                "petittitre1"=>"Labore consequatur",
                "petitparagraphe1"=>"Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere",
            ],
            [
                "icon1"=>"bx bx-shield",
                "petittitre1"=>"Beatae veritatis",
                "petitparagraphe1"=>"Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta"
            ],

        ]);
    }
}
