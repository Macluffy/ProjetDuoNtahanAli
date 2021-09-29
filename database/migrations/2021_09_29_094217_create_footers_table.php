<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adress');
            $table->string('ville');
            $table->string('tel');
            $table->string('numtel');
            $table->string('email');
            $table->string('emailadress');
            $table->string('links');
            $table->string('icon1');
            $table->string('link1');
            $table->string('link2');
            $table->string('link3');
            $table->string('link4');
            $table->string('link5');
            $table->string('services');
            $table->string('link6');
            $table->string('link7');
            $table->string('link8');
            $table->string('link9');
            $table->string('link10');
            $table->string('newsletter');
            $table->string('newsletterdescription');
            $table->string('copy1');
            $table->string('copy2');
            $table->string('copy3');
            $table->string('credits');
            $table->string('credits2');
            $table->string('icontwitter');
            $table->string('iconfb');
            $table->string('iconinsta');
            $table->string('icongoogleplus');
            $table->string('iconlinkedin');
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
        Schema::dropIfExists('footers');
    }
}
