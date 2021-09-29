<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->text('imgteam1');
            $table->string('nomteam1');
            $table->string('titreteam1');
            $table->string('icon1');
            $table->string('icon2');
            $table->string('icon3');
            $table->string('icon4');
            $table->text('imgteam2');
            $table->string('nomteam2');
            $table->string('titreteam2');
            $table->text('imgteam3');
            $table->string('nomteam3');
            $table->string('titreteam3');
            $table->text('imgteam4');
            $table->string('nomteam4');
            $table->string('titreteam4');
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
        Schema::dropIfExists('teams');
    }
}
