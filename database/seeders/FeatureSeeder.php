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
            [
                "titre"=>"Features",
                "paragraphe"=>"Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
                "img1"=>"features-1.png",
                "petittitre1"=>"Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.",
                "petitparagraphe1"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.",
                "icon1"=>"bi bi-check",
                "phrase1"=>"Ullamco laboris nisi ut aliquip ex ea commodo consequat.",

                "phrase2"=>"Duis aute irure dolor in reprehenderit in voluptate velit.",
                "phrase3"=>"Ullam est qui quos consequatur eos accusamus.",
                "img2"=>"features-2.png",
                "petittitre2"=>"Corporis temporibus maiores provident",
                "petitparagraphe2"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.",
                "grosparagraphe2"=>"Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum",
                "img3"=>"features-3.png",
                "petittitre3"=>"Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas",
                "petitparagraphe3"=>"Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.",
                "phrase4"=>"Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "phrase5"=>"Duis aute irure dolor in reprehenderit in voluptate velit.",
                "phrase6"=>"Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.",
                "img4"=>"features-4.png",
                "petittitre4"=>"Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in",
                "petitparagraphe4"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.",
                "grosparagraphe4"=>"Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum",

            ]
            ]);
    }
}
