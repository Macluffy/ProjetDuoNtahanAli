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
            'titre' => 'Contact',
            'description' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'icon1' => 'bx bx-map',
            'adress' => 'Our Address',
            'rue' => 'A108 Adam Street, New York, NY 535022',
            'icon2' => 'bx bx-envelope',
            'emailtitre' => 'Email Us',
            'emailadress' => 'info@example.com',
            'contactadress' => 'contact@example.com',
            'icon3' => 'bx bx-phone-call',
            'callus' => 'Call Us',
            'number1' => '+1 5589 55488 55',
            'number2' => '+1 6678 254445 41',
        ]);
    }
}
