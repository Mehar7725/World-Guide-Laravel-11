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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('city_image')->nullable();
            $table->string('city_name')->nullable();
            $table->string('country')->nullable();
            $table->longText('description')->nullable();
            $table->longText('city_video')->nullable();
            $table->longText('city_map')->nullable();
            $table->longText('best_time')->nullable();
            $table->longText('transportation')->nullable();
            $table->longText('weather')->nullable();
            $table->longText('information')->nullable();
            $table->string('business_url')->nullable();
            $table->string('taxi_url')->nullable();
            $table->string('law_url')->nullable();
            $table->string('lawyer_url')->nullable();
            $table->string('event_url')->nullable();
            $table->string('tours_url')->nullable();
            $table->string('car_url')->nullable();
            $table->string('estate_url')->nullable();
            $table->string('hotel_url')->nullable();
            $table->string('restaurant_url')->nullable();
            $table->string('coffee_url')->nullable();
            $table->string('bars_url')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
