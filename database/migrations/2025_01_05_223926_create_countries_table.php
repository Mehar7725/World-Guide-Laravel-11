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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('country_image')->nullable();
            $table->string('country_name')->nullable();
            $table->string('country_code')->nullable();
            $table->longText('country_video')->nullable();
            $table->longText('country_map')->nullable();
            $table->longText('best_time')->nullable();
            $table->longText('transportation')->nullable();
            $table->longText('weather')->nullable();
            $table->longText('information')->nullable();
            $table->longText('language')->nullable();
            $table->longText('electric')->nullable();
            $table->string('electric_image')->nullable();
            $table->longText('currency')->nullable();
            $table->string('currency_image')->nullable();
            $table->string('facts_url')->nullable();
            $table->string('history_url')->nullable();
            $table->string('dining_url')->nullable();
            $table->string('visa_info_url')->nullable();
            $table->string('visa_light_url')->nullable();
            $table->string('tours_url')->nullable();
            $table->string('constitution_url')->nullable();
            $table->string('emergency_url')->nullable();
            $table->string('embassies_url')->nullable();
            $table->string('news_url')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
