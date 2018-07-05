<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConfigLandingpage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_landingpages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre',200)->nullable();
            $table->string('urlimage',250)->nullable();
            $table->text('code')->nullable();
            $table->boolean('vue')->default(0)->nullable();
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
        Schema::dropIfExists('config_landingpages');
    }
}
