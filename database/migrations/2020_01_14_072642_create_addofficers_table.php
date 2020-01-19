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
            $table->integer('officer_id');
            $table->string('officer_name');
            $table->string('area');
            $table->string('address');
            $table->integer('mobile');
            $table->string('email');
            $table->binary('image');//for blob
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
