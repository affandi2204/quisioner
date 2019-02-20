<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question', 191)->default('text');
            $table->string('option1', 191)->default('text');
            $table->string('option2', 191)->default('text');
            $table->string('option3', 191)->default('text');
            $table->string('option4', 191)->default('text');
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
        Schema::dropIfExists('quis');
    }
}
