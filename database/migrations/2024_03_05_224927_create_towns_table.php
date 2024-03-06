<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('towns', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->string('name');
      $table->foreignUuid('region_id')->constrained('regions');
      $table->decimal('lat', 10, 7);
      $table->decimal('lng', 10, 7);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('towns');
  }
};
