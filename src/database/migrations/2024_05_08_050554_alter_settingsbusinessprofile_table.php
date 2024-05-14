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
       Schema::table('settingsbusinessprofile', function(Blueprint $table){

          $table->string('profile')->before('PhoneNumber')->nullable();

       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
