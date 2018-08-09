<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableOrganigrammeToFmbb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organigrammes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre',200)->nullable();
            $table->string('organigramme',200)->nullable();
            $table->string('tags',200)->nullable();
            $table->boolean('options')->default(0);
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
        Schema::dropIfExists('organigrammes');
    }
}
