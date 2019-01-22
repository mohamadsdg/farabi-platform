<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropStartupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prop_startup', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('prop_id');
            $table->unsignedInteger('startup_id');
            $table->timestamps();

            $table->foreign('prop_id')->references('id')->on('props')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('startup_id')->references('id')->on('startups')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prop_startup');
    }
}
