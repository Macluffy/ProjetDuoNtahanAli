<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            [
                "titrenav"=>"Bikin",
                "link1nav"=>"Home",
                "link2nav"=>"About",
                "link3nav"=>"Services",
                "link4nav"=>"Portfolio",
                "link5nav"=>"Team",
                "link6nav"=>"Contact",
                "btnstartnav"=>"Get Started",
                "login"=>"Log in",
                "register"=>"Register",
                "dashboard"=>"dashboard",
            ]
        ]);
    }
}
