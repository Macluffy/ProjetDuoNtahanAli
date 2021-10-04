<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            ['imgteam' => '/img/team/team-1.jpg',
            'nomteam' => 'Walter White',
            'titreteam' => 'Chief Executive Officer'],

            ['imgteam' => '/img/team/team-2.jpg',
            'nomteam' => 'Sarah Jhonson',
            'titreteam' => 'Product Manager'],

            ['imgteam' => '/img/team/team-3.jpg',
            'nomteam' => 'William Anderson',
            'titreteam' => 'CTO'],

            ['imgteam' => '/img/team/team-4.jpg',
            'nomteam' => 'Amanda Jepson',
            'titreteam' => 'Accountant'],
        ]);
    }
}
