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
            $table->unsignedInteger("user_id_away")->nullable();
            $table->string("day");
            $table->enum('time',['90','60','120']);
            $table->string('contact');
            $table->string('description');
            $table->enum('status',['pending','done','cancelled']);
            $table->foreign('pitch_id')->references('id')->on('pitchs')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_id_away')->references('id')->on('users')->onDelete('cascade');
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
