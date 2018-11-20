<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            //LOGIN
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('marrige_date');
            $table->string('gender');
            $table->unsignedInteger('departamento_id');
            $table->unsignedInteger('municipio_id');

            //GENERAL DATA
            $table->string('avatar')->nullable();
            $table->integer('phone')->nullable();
            $table->string('about_me')->nullable();

            //PARTNER DATA
            $table->string('partner_name')->nullable();
            $table->string('partner_gender')->nullable();

            //INSPIRATION
            $table->string('wedding_color')->nullable();
            $table->string('wedding_weather')->nullable();
            $table->string('wedding_style')->nullable();
            $table->string('wedding_honeymoon')->nullable();

            //MY MARRIGE
            $table->integer('expected_guests')->nullable();
            $table->unsignedInteger('wedding_departamento')->nullable();
            $table->unsignedInteger('wedding_municipio')->nullable();
            $table->string('about_my_marrige')->nullable();
            $table->integer('wedding_hour_start')->nullable();
            $table->integer('wedding_minute_start')->nullable();
            $table->integer('wedding_hour_finish')->nullable();
            $table->integer('wedding_minute_finish')->nullable();

            //RELATIONSHIPS
            $table->foreign('departamento_id')->references('id_departamento')->on('departamentos');
            $table->foreign('municipio_id')->references('id_municipio')->on('municipios');
            $table->foreign('wedding_departamento')->references('id_departamento')->on('departamentos');
            $table->foreign('wedding_municipio')->references('id_municipio')->on('municipios');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
