<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructor_sessions', function (Blueprint $table) {

            $table->integer('instructor_id')->unsigned();
            $table->integer('session_id')->unsigned();
            $table->foreign('instructor_id')
                ->references('id')
                ->on('instructors')
                ->onDelete('cascade');
            $table->foreign('session_id')
                ->references('id')
                ->on('sessions')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instructor_sessions');
    }
};
