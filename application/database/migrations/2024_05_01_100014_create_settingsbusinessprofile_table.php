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
        Schema::create('settingsbusinessprofile', function (Blueprint $table) {
            $table->id();
            $table->string('PhoneNumber');
            $table->string('About');
            $table->string('BusinessAddress');
            $table->string('BusinessDescription');
            $table->string('Email');
            $table->string('BusinessIndustry');
            $table->string('BusinessWebsite1');
            $table->string('BusinessWebsite2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settingsbusinessprofile');
    }
};
