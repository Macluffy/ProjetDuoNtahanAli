<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('paragraphe');
            $table->string('icon1');
            $table->string('link1');
            $table->string('paragraphelink1');
            $table->string('icon2');
            $table->string('link2');
            $table->string('paragraphelink2');
            $table->string('icon3');
            $table->string('link3');
            $table->string('paragraphelink3');

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
        Schema::dropIfExists('services');
    }
}
