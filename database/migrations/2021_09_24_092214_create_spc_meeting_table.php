<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpcMeetingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spc_meeting', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quarter_id')->constrained('quarter');
            // $table->string('title')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('venue')->nullable();
            $table->text('participants')->nullable();
            $table->text('deferred_list')->nullable(); // {id, reason: 'reason for the action taken'}
            $table->longText('minutes')->nullable();
            $table->boolean('minute_status')->default(false);
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('spc_meeting');
    }
}
