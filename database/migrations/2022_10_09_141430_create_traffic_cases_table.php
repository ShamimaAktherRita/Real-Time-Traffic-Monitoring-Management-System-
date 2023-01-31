<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrafficCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traffic_cases', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('traffic_id');
            $table->string('name');
            $table->string('date_of_birth');
            $table->integer('nid');
            $table->string('vehicle_type');
            $table->string('vehicle_number');
            $table->string('offense');
            $table->string('punishment');
            $table->string('date');
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
        Schema::dropIfExists('traffic_cases');
    }
}
