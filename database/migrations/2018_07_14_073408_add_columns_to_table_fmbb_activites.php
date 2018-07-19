<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToTableFmbbActivites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fmbb_activites', function (Blueprint $table) {
            $table->date('debut')->nullable()->after('lieu');
            $table->date('fin')->nullable()->before('options');
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
