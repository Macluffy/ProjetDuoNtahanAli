<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->string('link1');
            $table->string('link2');
            $table->string('link3');
            $table->string('link4');
            $table->string('titreimg1');
            $table->string('soustitreimg1');
            $table->text('img1');
            $table->string('icon1img');
            $table->string('iccon2img');
            $table->string('titreimg2');
            $table->string('soustitreimg2');
            $table->text('img2');
            $table->string('titreimg3');
            $table->string('soustitreimg3');
            $table->text('img3');
            $table->string('titreimg4');
            $table->string('soustitreimg4');
            $table->text('img4');
            $table->string('titreimg5');
            $table->string('soustitreimg5');
            $table->text('img5');
            $table->string('titreimg6');
            $table->string('soustitreimg6');
            $table->text('img6');
            $table->string('titreimg7');
            $table->string('soustitreimg7');
            $table->text('img7');
            $table->string('titreimg8');
            $table->string('soustitreimg8');
            $table->text('img8');
            $table->string('titreimg9');
            $table->string('soustitreimg9');
            $table->text('img9');
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
        Schema::dropIfExists('portfolios');
    }
}
