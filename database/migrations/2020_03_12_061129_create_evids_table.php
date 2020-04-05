<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evids', function (Blueprint $table) {
            $table->bigIncrements('evid_id');
            $table->string('evidence');
            $table->string('suspect');
            $table->string('note');
            $table->integer('physical');
            $table->integer('logical');
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
        Schema::dropIfExists('evids');
    }
}
