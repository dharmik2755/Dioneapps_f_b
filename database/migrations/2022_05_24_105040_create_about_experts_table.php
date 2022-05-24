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
        Schema::create('about_experts', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->string('description',1000);
            $table->string('sub_title',1500);
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
        Schema::dropIfExists('about_experts');
    }
};
