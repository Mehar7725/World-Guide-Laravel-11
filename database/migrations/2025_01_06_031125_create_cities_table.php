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
            $table->longText('business_url')->nullable();
            $table->longText('taxi_url')->nullable();
            $table->longText('law_url')->nullable();
            $table->longText('lawyer_url')->nullable();
            $table->longText('event_url')->nullable();
            $table->longText('tours_url')->nullable();
            $table->longText('car_url')->nullable();
            $table->longText('estate_url')->nullable();
            $table->longText('hotel_url')->nullable();
            $table->longText('restaurant_url')->nullable();
            $table->longText('coffee_url')->nullable();
            $table->longText('bars_url')->nullable();
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
