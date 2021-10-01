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
            
            $table->string('img1');
            $table->string('petittitre1');
            $table->text('petitparagraphe1');
            $table->string('icon1')->nullable();
            $table->text('phrase1');
            $table->string('icon2')->nullable();
            $table->text('phrase2');
            $table->string('icon3')->nullable();
            $table->text('phrase3');

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
