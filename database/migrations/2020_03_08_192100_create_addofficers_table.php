<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddofficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addofficers', function (Blueprint $table) {
            $table->bigIncrements('officer_id');
            $table->string('password');
            $table->string('username');
            $table->string('area');
            $table->string('address');
            $table->string('mobile');
            $table->string('email');
            $table->binary('select_file');
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
        Schema::dropIfExists('addofficers');
    }
}
