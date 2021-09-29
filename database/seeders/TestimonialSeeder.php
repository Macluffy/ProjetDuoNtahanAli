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
            'titre' => 'Testimonials',
            'description' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'icon1' => 'bx bxs-quote-alt-left quote-icon-left',
            'personne1' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
            'icon2' => 'bx bxs-quote-alt-right quote-icon-right',
            'imgpersonne1' => '/img/testimonials/testimonials-1.jpg',
            'nompersonne1' => 'Saul Goodman',
            'statutpersonne1' => 'Ceo & Founder',
            'personne2' => 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa',
            'imgpersonne2' => '/img/testimonials/testimonials-2.jpg',
            'nompersonne2' => 'Sara Wilsson',
            'statutpersonne2' => 'Designer',
            'personne3' => 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.',
            'imgpersonne3' => '/img/testimonials/testimonials-3.jpg',
            'nompersonne3' => 'Jena Karlis',
            'statutpersonne3' => 'Store Owner',
            'personne4' => 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.',
            'imgpersonne4' => '/img/testimonials/testimonials-4.jpg',
            'nompersonne4' => 'Matt Brandon',
            'statutpersonne4' => 'Freelancer',
            'personne5' => 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.',
            'imgpersonne5' => '/img/testimonials/testimonials-5.jpg',
            'nompersonne5' => 'John Larson',
            'statutpersonne5' => 'Entrepreneur',
        ]);
    }
}
