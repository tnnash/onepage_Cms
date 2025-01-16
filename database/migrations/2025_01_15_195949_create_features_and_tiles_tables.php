<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesAndTilesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        // Create 'tiles' table
        Schema::create('tiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('feature_id')->constrained()->onDelete('cascade'); // Reference to 'features' table
            $table->string('name');
            $table->text('description');
            $table->string('color');
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
        // Drop 'tiles' and 'features' tables
        Schema::dropIfExists('tiles');
        Schema::dropIfExists('features');
    }
}
