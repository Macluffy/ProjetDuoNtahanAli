<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "icon1"=>"bx bxl-dribbble",
                "link1"=>"Lorem Ipsum",
                "paragraphelink1"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi"
            ],
            [
                "icon1"=>"bx bx-file",
                "link1"=>"Sed ut perspiciatis",
                "paragraphelink1"=>"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore"
            ],
            [
                "icon1"=>"bx bx-tachometer",
                "link1"=>"Magni Dolores",
                "paragraphelink1"=>"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia"
            ],
            [
                "icon1"=>"bx bx-layer",
                "link1"=>"Nemo Enim",
                "paragraphelink1"=>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis"
            ],
            ]);
    }
}
