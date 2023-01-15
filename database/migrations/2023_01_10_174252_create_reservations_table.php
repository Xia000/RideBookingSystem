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
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('pickup_address');
            $table->string('destination_address');
            $table->date('pickup_date');
            $table->time('pickup_time');
            $table->double('distance', 8, 2);
            $table->enum('status', ['scheduled', 'completed', 'cancelled']);
            $table->string('ride_type');
            $table->string('passenger');
            $table->string('price');

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
