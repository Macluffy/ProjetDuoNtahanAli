<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            HeaderSeeder::class,
            HeroSeeder::class,
            AboutSeeder::class,
            FeatureSeeder::class,
            ServiceSeeder::class,
            TitreSeeder::class,
            AboutbtnSeeder::class,
            PortfolioSeeder::class,
            ContactSeeder::class,
            TeamSeeder::class,
            TestimonialSeeder::class,
            FooterSeeder::class,
            RoleSeeder::class,
        ]);
    }
}
