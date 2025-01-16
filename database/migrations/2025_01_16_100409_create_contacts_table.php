<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Contacts;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
        public function up()
    {
        Schema::create('contacts_infos', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('business_hours');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
