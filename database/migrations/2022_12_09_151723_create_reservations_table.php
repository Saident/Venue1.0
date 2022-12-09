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
        Schema::create('reservations', function (Blueprint $table) {
            $table->string('id_reservation', 8)->unique();
            $table->string('email',);
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
            $table->foreignId('id_venue')->references('id')->on('venues')->onDelete('cascade');
            $table->date('check_in')->nullable();
            $table->date('check_out')->nullable();
            $table->integer('days_count')->nullable();
            $table->integer('price')->nullable();
            $table->string('id_transaction')->nullable();
            $table->string('status')->default('Belum di bayar');
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
        Schema::dropIfExists('reservations');
    }
};