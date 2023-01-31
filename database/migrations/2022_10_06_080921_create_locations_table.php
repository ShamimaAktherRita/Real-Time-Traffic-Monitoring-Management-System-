<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('starting_location');
            $table->string('destination_location');
            $table->longText('short_path_destination_link');
            $table->longText('long_path_destination_link');
            $table->string('short_path_time');
            $table->string('long_path_time');
            $table->longText('short_path_parking_link');
            $table->longText('long_path_parking_link');
            $table->string('short_path_distance');
            $table->string('long_path_distance');
            
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
        Schema::dropIfExists('locations');
    }
}
