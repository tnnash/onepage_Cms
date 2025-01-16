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
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // E.g., Clients, Projects, etc.
            $table->string('value'); // E.g., 150+, 200+, etc.
            $table->string('color'); // To apply different colors like text-blue-600, text-green-600, etc.
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stats');
    }
};
