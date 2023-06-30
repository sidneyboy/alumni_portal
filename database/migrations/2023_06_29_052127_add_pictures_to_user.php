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
        Schema::table('Users', function (Blueprint $table) {
            $table->longText('profile_picture')->nullable();
            $table->longText('timeline_picture')->nullable();
            $table->string('gender')->nullable();
            $table->string('date_of_birth')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Users', function (Blueprint $table) {
            $table->dropColumn('profile_picture');
            $table->dropColumn('timeline_picture');
            $table->dropColumn('gender');
            $table->dropColumn('date_of_birth');
        });
    }
};
