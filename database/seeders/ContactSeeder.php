<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'adress' => 'Our Address',
            'rue' => 'A108 Adam Street, New York, NY 535022',
            'emailadress' => 'info@example.com',
            'contactadress' => 'contact@example.com',
            'number1' => '+1 5589 55488 55',
            'number2' => '+1 6678 254445 41',
        ]);
    }
}
