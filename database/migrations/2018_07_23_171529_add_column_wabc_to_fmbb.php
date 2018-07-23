<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnWabcToFmbb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wabc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',250)->nullable();
            $table->string('federation',250)->nullable();
            $table->string('licence_id',250)->nullable();
            $table->boolean('option')->default(0);
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
        Schema::dropIfExists('wabc');
    }
}
