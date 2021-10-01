<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([

            "img1" => "features-1.png",
            "petittitre1" => "Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.",
            "petitparagraphe1" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.",
            "icon1" => "bi bi-check",
            "phrase1" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "icon2" => "bi bi-check",
            "phrase2" => "Duis aute irure dolor in reprehenderit in voluptate velit.",
            "icon3" => "bi bi-check",
            "phrase3" => "Ullam est qui quos consequatur eos accusamus.",


        ]);
        DB::table('features')->insert([

            "img1" => "features-2.png",
            "petittitre1" => "Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.",
            "petitparagraphe1" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.",
            "phrase1" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "phrase2" => "Duis aute irure dolor in reprehenderit in voluptate velit.",
            "phrase3" => "Ullam est qui quos consequatur eos accusamus.",


        ]);
        DB::table('features')->insert([

            "img1" => "features-3.png",
            "petittitre1" => "Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.",
            "petitparagraphe1" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.",
            "icon1" => "bi bi-check",
            "phrase1" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "icon2" => "bi bi-check",
            "phrase2" => "Duis aute irure dolor in reprehenderit in voluptate velit.",
            "icon3" => "bi bi-check",
            "phrase3" => "Ullam est qui quos consequatur eos accusamus.",


        ]);
        DB::table('features')->insert([

            "img1" => "features-4.png",
            "petittitre1" => "Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.",
            "petitparagraphe1" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.",
            "phrase1" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "phrase2" => "Duis aute irure dolor in reprehenderit in voluptate velit.",
            "phrase3" => "Ullam est qui quos consequatur eos accusamus.",


        ]);
    }
}
