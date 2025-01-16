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
        Schema::create('pricing_plans', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // E.g., Basic Plan, Standard Plan, etc.
            $table->string('price'); // Price of the plan
            $table->text('description'); // Description of the plan
            $table->text('features'); // Comma-separated list of features
            $table->string('button_text'); // Text for the button (e.g., 'Get Started')
            $table->string('button_link'); // Link for the button
            $table->timestamps();
        });
         
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_plans');
    }
};
