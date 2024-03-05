<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained();
            $table->string('application_num'); // application number for the given year
            $table->string('quarter_num');
            $table->string('dev_permit_num')->nullable();
            $table->string('permit_num')->nullable();
            $table->string('title');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('contact');
            $table->foreignId('locality_id')->constrained();
            $table->foreignId('sector_id')->constrained();
            $table->foreignId('quarter_id')->constrained('quarter');
            $table->string('block');
            $table->string('plot');
            $table->integer('shelf')->nullable();
            $table->string('type');
            $table->string('address')->nullable();
            $table->string('house_no');

            $table->boolean('recommended')->default(false);
            $table->boolean('approved')->default(false);
            $table->boolean('deferred')->default(false);
            // $table->boolean('refused')->default(false);
            // $table->boolean('regularized')->default(false);
            // $table->longText('decision')->nullable();


            $table->integer('height')->default(1);
            $table->longText('scanned_app_documents')->nullable();
            $table->longText('other_documents')->nullable();
            $table->boolean('processed')->default(false); // If application is successfully recieved
            $table->boolean('existing')->default(false); // If building already exist [falls under regularization]
            $table->string('use');
            $table->date('approved_on')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
