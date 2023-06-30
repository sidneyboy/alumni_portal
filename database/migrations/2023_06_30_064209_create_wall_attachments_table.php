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
        Schema::create('wall_attachments', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('wall_id')->unsigned()->index()->nullable();
            $table->foreign('wall_id')->references('id')->on('walls');
            $table->longText('attachment');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('wall_attachments');
    }
};
