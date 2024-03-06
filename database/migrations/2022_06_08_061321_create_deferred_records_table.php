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
    // Managing applications that were no given permits
    Schema::create('deferred_records', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->boolean('processed')->default(false); // Set to true after application is finally approved
      $table->longText('comments')->nullable();
      $table->foreignUuid('application_id')->constrained('applications');
      $table->date('deferred_on')->nullable();
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
    Schema::dropIfExists('deferred_records');
  }
};
