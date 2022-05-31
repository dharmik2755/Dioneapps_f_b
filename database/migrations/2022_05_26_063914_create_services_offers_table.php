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
        Schema::create('services_offers', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('description',1000);
            $table->string('sub_title',2000);
            $table->string('sub_description',2000);
            $table->string('image',150);
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
        Schema::dropIfExists('services_offers');
    }
};
