<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableFmbbReglementInterieur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fmbb_reglement_interieur', function (Blueprint $table) {
            $table->increments('id');
            $table->text('contenu')->nullable();
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
        Schema::dropIfExists('fmbb_reglement_interieur');
    }
}
