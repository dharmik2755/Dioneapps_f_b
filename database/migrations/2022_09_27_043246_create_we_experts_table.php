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
        Schema::create('we_experts', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('description',1500);
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->TinyInteger('status')->default('1');
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
        Schema::dropIfExists('we_experts');
    }
};
