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
            'titre' => 'Team',
            'description' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'imgteam1' => '/img/team/team-1.jpg',
            'nomteam1' => 'Walter White',
            'titreteam1' => 'Chief Executive Officer',
            'icon1' => 'bi bi-twitter',
            'icon2' => 'bi bi-facebook',
            'icon3' => 'bi bi-instagram',
            'icon4' => 'bi bi-linkedin',
            'imgteam2' => '/img/team/team-2.jpg',
            'nomteam2' => 'Sarah Jhonson',
            'titreteam2' => 'Product Manager',
            'imgteam3' => '/img/team/team-3.jpg',
            'nomteam3' => 'William Anderson',
            'titreteam3' => 'CTO',
            'imgteam4' => '/img/team/team-4.jpg',
            'nomteam4' => 'Amanda Jepson',
            'titreteam4' => 'Accountant',
        ]);
    }
}
