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
        Schema::create('hall_interval', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('hall_id')->unsigned(); // Assuming hell_id is a foreign key
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->decimal('first_price', 10, 2);
            $table->decimal('price', 10, 2); // Assuming the price is a decimal with 10 digits in total and 2 digits after the decimal point
            $table->timestamps();

            // Add foreign key constraint (assuming 'hells' is the related table name)
            $table->foreign('hall_id')->references('id')->on('hall_weddings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hall_interval');
    }
};
