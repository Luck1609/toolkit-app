<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact');
            $table->unsignedBigInteger('locality_id');
            $table->unsignedBigInteger('sector_id');
            // $table->string('locality_name');
            // $table->string('sector_name');
            $table->unsignedBigInteger('staff_id');
            $table->string('block');
            $table->string('plot');
            $table->date('issued_on');
            $table->timestamps();

            $table->foreign('staff_id')->references('id')->on('staff')->onDelete(null);
            $table->foreign('locality_id')->references('id')->on('localities')->onDelete(null);
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_plans');
    }
}
