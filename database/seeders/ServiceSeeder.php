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
                "titre"=>"Services",
                "paragraphe"=>"Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
                "icon1"=>"bx bxl-dribbble",
                "link1"=>"Lorem Ipsum",
                "paragraphelink1"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
                "icon2"=>"bx bx-file",
                "link2"=>"Sed ut perspiciatis",
                "paragraphelink2"=>"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore",
                "icon3"=>"bx bx-tachometer",
                "link3"=>"Magni Dolores",
                "paragraphelink3"=>"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia",
            ]
            ]);
    }
}
