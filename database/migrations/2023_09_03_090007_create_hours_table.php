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
            $table->foreignId('userId')->constrained();
            $table->bigInteger('monthId')->unsigned();
            $table->bigInteger('yearId')->unsigned();
            $table->integer('targetValue');
            $table->integer('rent');
            $table->integer('waterCost');
            $table->integer('utilityCost');
            $table->integer('foodCost');
            $table->integer('phoneCost');
            $table->integer('otherCost');
            $table->integer('totalCost');
            $table->integer('income');
            $table->integer('hourlyWage');
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
