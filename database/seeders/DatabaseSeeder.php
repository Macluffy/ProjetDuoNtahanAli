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
            TitreSeeder::class,
            PortfolioSeeder::class,
            TestimonialSeeder::class,
            TeamSeeder::class,
            ContactSeeder::class,
            FooterSeeder::class
        ]);
    }
}
