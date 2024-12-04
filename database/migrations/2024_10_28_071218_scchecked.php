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
        Schema::create('sscCheckeds', function (Blueprint $table) {
            $table->id();
            $table->integer('sscID')->nullable();
            $table->enum('DisciplineCheckedDeliveryDoc', ['pass', 'fail'])->nullable();
            $table->enum('DisciplineCheckedOnlineClip', ['pass', 'fail'])->nullable();
            $table->enum('DisciplineCheckedPP', ['pass', 'fail'])->nullable();
            $table->enum('DiscilplineCheckSummary', ['pass', 'fail'])->nullable();
            $table->enum('DisciplineCompleted', ['yes', 'no'])->nullable();
            $table->date('StartDate')->nullable();
            $table->date('EndDate')->nullable();
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
