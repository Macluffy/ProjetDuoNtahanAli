<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('paragraphe');
            $table->string('link');
            $table->string('icon1');
            $table->string('petittitre1');
            $table->string('petitparagraphe1');
            $table->string('icon2');
            $table->string('petittitre2');
            $table->string('petitparagraphe2');
            $table->string('icon3');
            $table->string('petittitre3');
            $table->string('petitparagraphe3');
            $table->string('icon4');
            $table->string('petittitre4');
            $table->string('petitparagraphe4');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
