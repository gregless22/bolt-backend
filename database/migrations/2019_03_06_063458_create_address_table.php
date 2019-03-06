<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('suburb');
            $table->unsignedSmallInteger('postcode'); //todo have a look if this is the correct type
            $table->string('stree_address');
            $table->decimal('lng', 10, 7); //todo have a look if this is the correct type
            $table->decimal('lat', 10, 7); //todo have a look if this is the correct type
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}
