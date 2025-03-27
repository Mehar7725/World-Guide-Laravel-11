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
        Schema::create('adds_payments', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('name')->nullable();
            $table->string('number')->nullable();
            $table->string('cvv')->nullable();
            $table->string('date')->nullable();
            $table->string('amount')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adds_payments');
    }
};
