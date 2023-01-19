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
        Schema::create('employees_salaries', function (Blueprint $table) {
            $table->id();
            $table->integer('employees_id');
            $table->string('employees_name');
            $table->string('designation');
            $table->string('location');
            $table->string('gender');
            $table->string('leave');
            $table->string('day_payable');
            $table->string('month');
            $table->string('net_salary');
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
        Schema::dropIfExists('employees_salaries');
    }
};
