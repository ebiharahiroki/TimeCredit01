<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->bigInteger('month_id')->unsigned();
            $table->bigInteger('year_id')->unsigned();
            $table->integer('rent');
            $table->integer('water_cost');
            $table->integer('utilitiy_cost');
            $table->integer('food_cost');
            $table->integer('phone_cost');
            $table->integer('other_cost');
            $table->integer('total_cost');
            $table->integer('income');
            $table->integer('hourly_wage');
            $table->integer('amount');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hours');
    }
};
