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
        Schema::create('adds', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('price')->nullable();
            $table->string('time')->nullable();
            $table->longText('title')->nullable();
            $table->longText('address')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('category')->nullable();
            $table->longText('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('price_details')->nullable();
            $table->string('price_from')->nullable();
            $table->string('price_to')->nullable();
            $table->longText('business_day')->nullable();
            $table->longText('business_start_time')->nullable();
            $table->longText('business_end_time')->nullable();
            $table->longText('social_name')->nullable();
            $table->longText('social_link')->nullable();
            $table->longText('faq_question')->nullable();
            $table->longText('faq_answer')->nullable();
            $table->longText('description')->nullable();
            $table->longText('video')->nullable();
            $table->string('image')->nullable();
            $table->longText('featured_image')->nullable();
            $table->string('logo')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adds');
    }
};
