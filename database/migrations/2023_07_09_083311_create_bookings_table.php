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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->bigInteger('hall_id')->unsigned();
            $table->foreign('hall_id')->references('id')->on('hall_weddings')->onDelete('cascade');
        //    $table->bigInteger('venue_id')->unsigned();
          //  $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');
            //$table->bigInteger('package_id')->unsigned();
            //$table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('booking_date');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->integer('status')->nullable();
            $table->integer('validate_info')->default(0)->nullable()->comment('0 not give valide info 1 valuidate');
            $table->integer('accept_term')->default(0)->nullable()->comment('0 not accept info 1 accepted');
            $table->integer('type')->default(1)->nullable()->comment('1 booked by employ 2 booked by client');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
