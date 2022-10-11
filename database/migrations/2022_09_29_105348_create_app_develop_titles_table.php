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
        Schema::create('app_develop_titles', function (Blueprint $table) {
            $table->id();
            $table->string('special_id');
            $table->string('title');
            $table->string('des');
            $table->string('ios');
            $table->string('ios_des');
            $table->string('android');
            $table->string('android_des');
            $table->tinyInteger('status')->default('1');
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
        Schema::dropIfExists('app_develop_titles');
    }
};
