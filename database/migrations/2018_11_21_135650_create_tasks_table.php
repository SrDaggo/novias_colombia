<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('note')->nullable();
            $table->string('status')->default('incomplete');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('date_id');

            //relationships
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('task_categories');
            $table->foreign('date_id')->references('id')->on('task_dates');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('tasks');
    }
}
