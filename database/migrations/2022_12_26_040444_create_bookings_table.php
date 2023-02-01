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
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments("id")->from(1000000);
            $table->unsignedInteger("pitch_id");
            $table->unsignedInteger("user_id");
            $table->string("time_start");
            $table->string("time_end");
            $table->date("day");
            $table->string('contact');
            $table->string('description');
            $table->foreign('pitch_id')->references('id')->on('pitchs')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('bookings');
    }
};
