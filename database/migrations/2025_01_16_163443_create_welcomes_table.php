<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
        public function up()
    {
        Schema::create('welcomes', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // For "Welcome to Our Website"
            $table->text('description'); // For "Your one-stop solution..."
            $table->string('button_text'); // For "Get Started"
            $table->string('button_link'); // Link for the button
            $table->string('video_button_text')->nullable(); // Text for video button
            $table->string('video_button_icon')->nullable(); // Icon for video button
            $table->string('image_path'); // Path to the image
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('welcomes');
    }
};
