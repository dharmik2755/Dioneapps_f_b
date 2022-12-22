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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('description',2000);
            $table->string('service_type',20);
            $table->string('playstore_link',500)->nullable();
            $table->string('appstore_link',500)->nullable();
            $table->string('web_link',500)->nullable();
            $table->string('graphic',50)->nullable();
            $table->string('image');
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
        Schema::dropIfExists('portfolios');
    }
};
