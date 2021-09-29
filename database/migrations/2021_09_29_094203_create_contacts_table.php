<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->string('icon1');
            $table->string('adress');
            $table->string('rue');
            $table->string('icon2');
            $table->string('emailtitre');
            $table->string('emailadress');
            $table->string('contactadress');
            $table->string('icon3');
            $table->string('callus');
            $table->string('number1');
            $table->string('number2');
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
        Schema::dropIfExists('contacts');
    }
}

