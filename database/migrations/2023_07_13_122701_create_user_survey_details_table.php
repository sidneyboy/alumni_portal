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
        Schema::create('user_survey_details', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('user_survey_id')->unsigned()->index()->nullable();
            $table->foreign('user_survey_id')->references('id')->on('user_surveys');
            $table->longText('question');
            $table->longText('answer');
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
        Schema::dropIfExists('user_survey_details');
    }
};
