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
        Schema::create('templatemessage', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Category');
            $table->string('Language');
            $table->string('BroadcastTitle');
            $table->string('Body');
            $table->string('Footer');
            $table->string('Buttons');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('templatemessage');
    }
};
