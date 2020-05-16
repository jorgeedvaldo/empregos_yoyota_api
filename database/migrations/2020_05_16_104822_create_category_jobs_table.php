<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_jobs', function(Blueprint $table) {
            $table->integer('category_id')->unsigned();
            $table->integer('job_id')->unsigned();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('job_id')->references('id')->on('jobs');

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
        Schema::dropIfExists('category_jobs');
    }
}
