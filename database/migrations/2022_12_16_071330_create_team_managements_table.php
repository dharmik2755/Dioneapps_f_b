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
        Schema::create('team_managements', function (Blueprint $table) {
            $table->id();
            $table->integer('index')->nullable();
            $table->string('team_member',50);
            $table->string('firstname',50);
            $table->string('lastname',50);
            $table->string('email',100)->unique();
            $table->string('number',20);
            $table->string('position',50);
            $table->string('education',200);
            $table->string('birthdate',20);
            $table->string('image',500);
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
        Schema::dropIfExists('team_managements');
    }
};
