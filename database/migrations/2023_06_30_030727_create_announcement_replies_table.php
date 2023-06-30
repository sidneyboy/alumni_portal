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
        Schema::create('announcement_replies', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('announcements_id')->unsigned()->index()->nullable();
            $table->foreign('announcements_id')->references('id')->on('announcements');
            $table->integer('user_id');
            $table->longText('content');
            $table->string('status')->nullable();
            $table->string('user_type');
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
        Schema::dropIfExists('announcement_replies');
    }
};
