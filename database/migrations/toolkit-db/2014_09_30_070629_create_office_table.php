<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('region');
            $table->string('district');
            $table->string('initials');
            $table->integer('shelves')->nullable();
            $table->string('contact')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('logo')->nullable();
            $table->integer('sms_balance')->nullable();
            $table->integer('server_id')->nullable(); // office id on server
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
        Schema::dropIfExists('office');
    }
}
