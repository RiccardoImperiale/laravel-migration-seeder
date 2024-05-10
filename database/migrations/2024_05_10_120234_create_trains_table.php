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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 255)->nullable();
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->time('departure_time', 0);
            $table->time('arrival_time', 0);
            $table->unsignedMediumInteger('train_code');
            $table->unsignedTinyInteger('carriages_number')->nullable();
            $table->boolean('in_time')->nullable();
            $table->boolean('cancelled')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
