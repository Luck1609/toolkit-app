<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sectors', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->foreignUuid('locality_id')->constrained('localities');
      $table->string('name');
      $table->string('initials');
      $table->text('blocks');
      $table->timestamps();

      // $table->foreign('locality_id')->references('id')->on('localities')->onDelete(null);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('sectors');
  }
}
