<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddsuspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addsuspects', function (Blueprint $table) {
            $table->bigIncrements('susp_id');
            $table->string('suspect');
            $table->string('mobile');
            $table->string('address');
            $table->string('relation');
            $table->string('note');
            $table->binary('upload_file');
            $table->integer('case_id');
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
        Schema::dropIfExists('addsuspects');
    }
}
