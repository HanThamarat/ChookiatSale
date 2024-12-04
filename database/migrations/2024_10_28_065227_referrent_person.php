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
        Schema::create('ReferentPerson', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName')->nullable();
            $table->string('LastName')->nullable();
            $table->string('IDCard')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->string('LineID')->nullable();
            $table->string('Facebook')->nullable();
            $table->timestamps();
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
