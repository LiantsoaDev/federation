<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableReglementUnifieToFmbb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reglement_unifies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre',200)->nullable();
            $table->text('contenu')->nullable();
            $table->string('tags',200)->nullable();
            $table->boolean('options')->default(0);
            $table->string('image',200)->nullable();
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
        Schema::dropIfExists('reglement_unifies');
    }
}
