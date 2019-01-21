<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoundersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('founders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 128)->nullable();
            $table->string('last_name', 128)->nullable();
            $table->unsignedInteger('grade_id')->nullable();
            $table->unsignedInteger('university_id')->nullable();
            $table->string('major', 256)->nullable();
            $table->enum('soldiership_status', ['معافیت', 'مشمول', 'اتمام خدمت'])->nullable();
            $table->text('achievement')->nullable();
            $table->unsignedInteger('user_id');
            $table->boolean('is_completed')->default(false);
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
        Schema::dropIfExists('founders');
    }
}
