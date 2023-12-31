<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hall_weddings', function (Blueprint $table) {
        $table->id();
        $table->string('latit');
        $table->string('longit');
        $table->string('address');
        $table->string('main_image')->nullable();
        $table->string('alt_image')->nullable();
        $table->integer('contact_number');
        $table->integer('phone')->nullable();
        $table->json('time_parts')->nullable();
        $table->bigInteger('city_id')->unsigned();
        $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        $table->string('name');
        $table->integer('capacity');
        $table->bigInteger('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->timestamps();


    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hall_weddings');
    }
};
