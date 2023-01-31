<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrafficSignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traffic_signs', function (Blueprint $table) {
            $table->id();
            $table->string('sign_title');
            $table->integer('category_id');
            $table->string('sign_no');
            $table->longText('sign_description');
            $table->longText('sign_application');
            $table->longText('sign_location');
            $table->text('image');
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
        Schema::dropIfExists('traffic_signs');
    }
}
