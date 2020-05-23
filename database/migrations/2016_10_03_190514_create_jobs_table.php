<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->integer('job_id');
            $table->string('name');
            $table->string('description');
            $table->boolean('isNew');
            $table->integer('weight');
            $table->string('file');
            $table->timestamp('file_uploaded_at');
            $table->integer('file_uploaded_by');
            $table->double('completeness');
            $table->double('partial_completeness');

            $table->date('deadline');
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
        Schema::drop('jobs');
    }
}
