<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFounderSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('founder_skill', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('founder_id');
            $table->unsignedInteger('skill_id');
            $table->timestamps();

            $table->foreign('founder_id')->references('id')->on('founders')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('founder_skill');
    }
}
