<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStartupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->date('start_date', 128);
            $table->text('introduction', 128);
            $table->enum('type', [
                'B2B', 'B2B2C', 'B2C', 'C2C', 'C2G', 'Other'
            ]);
            $table->enum('stage', [
                'فقط یک ایده',
                'محصول كامل با مشتريان اوليه',
                'در حال ساخت محصول',
                'محصول كامل با مشتريان متعدد',
                'كمينه محصول پذيرفتنی (MVP)',
                'در حال رشد سريع',
                'به تازگي وارد بازار شده',
                ' در مرحله بلوغ نهايي',
            ]);
            $table->boolean('is_mvp_ready')->default(false);
            $table->text('working');
            $table->text('similar_startup');
            $table->boolean('is_idea_submitted')->default(false);
            $table->string('company_name', 128);
            $table->string('company_rn', 16); // Company Registration Number
            $table->text('market_research');
            $table->text('description');
            $table->unsignedInteger('team_id');
            $table->unsignedInteger('founder_id');
            $table->boolean('is_completed')->default(false);
            $table->softDeletes();
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
        Schema::dropIfExists('startups');
    }
}
