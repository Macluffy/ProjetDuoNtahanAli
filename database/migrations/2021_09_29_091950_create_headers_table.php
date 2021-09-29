<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->string('titrenav');
            $table->string('link1nav');
            $table->string('link2nav');
            $table->string('link3nav');
            $table->string('link4nav');
            $table->string('link5nav');
            $table->string('link6nav');
            $table->string('btnstartnav');
            $table->string('login');
            $table->string('dashboard');
            $table->string('register');
            
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
        Schema::dropIfExists('headers');
    }
}
