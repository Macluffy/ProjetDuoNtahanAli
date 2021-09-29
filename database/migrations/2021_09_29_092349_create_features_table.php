<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('paragraphe');
            $table->string('img1');
            $table->string('petittitre1');
            $table->string('petitparagraphe1');
            $table->string('icon1');
            $table->string('phrase1');
            
            $table->string('phrase2');
            
            $table->string('phrase3');
            $table->string('img2');
            $table->string('petittitre2');
            $table->string('petitparagraphe2');
            $table->string('grosparagraphe2');
            $table->string('img3');
            $table->string('petittitre3');
            $table->string('petitparagraphe3');
            
            $table->string('phrase4');
            
            $table->string('phrase5');
            
            $table->string('phrase6');
            $table->string('img4');
            $table->string('petittitre4');
            $table->string('petitparagraphe4');
            $table->string('grosparagraphe4');

            

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
        Schema::dropIfExists('features');
    }
}
