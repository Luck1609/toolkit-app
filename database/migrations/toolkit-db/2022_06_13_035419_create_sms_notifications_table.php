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
      Schema::create('sms_notifications', function (Blueprint $table) {
        $table->id();
        $table->string('contacts');
        $table->enum('type', ['application', 'meeting', 'user', 'custom']);
        $table->longText('message');
        $table->enum('display_name', [
          'Received application',
          'Deferred application',
          'Approved application',
          'Staff registration',
          'Staff password reset',
          'Committee member registration',
          'Custom'
        ]);
        $table->foreignId('staff_id')->constrained();
        $table->integer('units_used');
        $table->boolean('status')->default(false); // Processed on not?
        $table->boolean('bulk')->default(false); // If it is bulk sms data should be an array
        $table->dateTime('sent_date')->nullable(); // Processed date
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
        Schema::dropIfExists('sms_notifications');
    }
};
