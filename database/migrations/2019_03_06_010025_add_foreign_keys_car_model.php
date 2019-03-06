<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysCarModel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carModel', function (Blueprint $table) {
            $table->unsignedInteger('makeId');
            $table->unsignedInteger('classId');
            $table->foreign('makeId')->references('id')->on('carMake');
            $table->foreign('classId')->references('id')->on('carClass');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carModel', function (Blueprint $table) {
            $table->dropForeign(['makeId']);
            $table->dropforeign(['classId']);
        });
    }
}
