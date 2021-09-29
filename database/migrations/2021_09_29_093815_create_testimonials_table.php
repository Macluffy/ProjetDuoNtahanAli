<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->string('icon1');
            $table->text('personne1');
            $table->string('icon2');
            $table->text('imgpersonne1');
            $table->string('nompersonne1');
            $table->string('statutpersonne1');
            $table->text('personne2');
            $table->text('imgpersonne2');
            $table->string('nompersonne2');
            $table->string('statutpersonne2');
            $table->text('personne3');
            $table->text('imgpersonne3');
            $table->string('nompersonne3');
            $table->string('statutpersonne3');
            $table->text('personne4');
            $table->text('imgpersonne4');
            $table->string('nompersonne4');
            $table->string('statutpersonne4');
            $table->text('personne5');
            $table->text('imgpersonne5');
            $table->string('nompersonne5');
            $table->string('statutpersonne5');
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
        Schema::dropIfExists('testimonials');
    }
}
