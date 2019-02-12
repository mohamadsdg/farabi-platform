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
                'JAI', // Just an idea
                'CPWPC', //  Complete product with primary customers
                'CPWNC', //  Complete product with numerous customers
                'DAP', // Developing a product
                'FG', // Fast growing
                'MVP', // Minimum acceptable product (MVP)
                'ITFMS', // In the final maturity stage
                'HJETM', // Has just entered the market
            ]);
            $table->boolean('is_mvp_ready')->default(false);
            $table->string('mvp_address')->nullable();
            $table->text('working');
            $table->text('similar_startup');
            $table->boolean('is_idea_submitted')->default(false);
            $table->string('company_name', 128)->nullable();
            $table->string('company_rn', 16)->nullable(); // Company Registration Number
            $table->text('market_research')->nullable();;
            $table->text('description')->nullable();;

            $table->string('business_model_file', 64)->nullable();
            $table->string('business_plan_file', 64)->nullable();
            $table->string('finance_model_file', 64)->nullable();
            $table->string('pitchdeck_file', 64)->nullable();

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
