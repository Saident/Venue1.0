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
        Schema::create('venues', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('vendor');
            $table->foreignId('id_category')->references('id')->on('categories')->onDelete('cascade');
            $table->string('address');
            $table->foreignId('id_city')->references('id')->on('cities')->onDelete('cascade');
            $table->string('description');
            $table->string('policy');
            $table->string('picture')->nullable();
            $table->integer('price')->nullable();
            $table->integer('rating');
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
        Schema::dropIfExists('venues');
    }
};