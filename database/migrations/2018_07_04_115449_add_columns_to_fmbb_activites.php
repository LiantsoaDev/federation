<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToFmbbActivites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fmbb_activites', function (Blueprint $table) {
            $table->unsignedInteger('saison_id');
             $table->foreign('saison_id')->references('id')->on('saisons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fmbb_activites', function (Blueprint $table) {
            //
        });
    }
}
