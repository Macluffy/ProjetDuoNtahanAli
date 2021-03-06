<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            ['personne' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
            'imgpersonne' => '/img/testimonials/testimonials-1.jpg',
            'nompersonne' => 'Saul Goodman',
            'statutpersonne' => 'Ceo & Founder'],

            ['personne' => 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.',
            'imgpersonne' => '/img/testimonials/testimonials-2.jpg',
            'nompersonne' => 'Sara Wilsson',
            'statutpersonne' => 'Designer'],

            ['personne' => 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.',
            'imgpersonne' => '/img/testimonials/testimonials-3.jpg',
            'nompersonne' => 'Jena Karlis',
            'statutpersonne' => 'Store Owner'],

            ['personne' => 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.',
            'imgpersonne' => '/img/testimonials/testimonials-4.jpg',
            'nompersonne' => 'Matt Brando',
            'statutpersonne' => 'Freelancer'],

            ['personne' => 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.',
            'imgpersonne' => '/img/testimonials/testimonials-5.jpg',
            'nompersonne' => 'John Larson',
            'statutpersonne' => 'Entrepreneur']
        ]);
    }
}
