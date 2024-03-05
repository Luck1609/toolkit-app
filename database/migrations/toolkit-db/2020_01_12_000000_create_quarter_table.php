<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuarterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('quarter', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->boolean('status')->default(true);
        $table->enum('quarter_name', [ '1st Quarter', '2nd Quarter', '3rd Quarter', '4th Quarter' ]);
        $table->boolean('finalized')->default(false);
        $table->integer('total')->default(0);
        $table->integer('approved')->default(0);
        $table->integer('defered')->default(0);
        $table->date('start_date');
        $table->date('end_date');
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
        Schema::dropIfExists('quarter');
    }
}
