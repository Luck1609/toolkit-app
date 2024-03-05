<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommitteeMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee_members', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->enum('title', ['Dr.', 'Eng.', 'Mr.', 'Mrs.', 'Ms.'])->default('Mr.');
            $table->string('contact');
            $table->string('email');
            $table->string('designation');
            $table->enum('panel', ['TSC', 'SPC'])->default('TSC');
            $table->enum('role', ['Chairperson', 'Secretary', 'Member', 'Other'])->default('Member');
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
        Schema::dropIfExists('committee_members');
    }
}
