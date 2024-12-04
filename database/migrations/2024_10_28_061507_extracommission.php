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
        Schema::create('extraComssions', function (Blueprint $table) {
            $table->id();
            $table->integer('InterestCampaignID')->nullable();
            $table->integer('FinanceID')->nullable();
            $table->float('ExtraCommissionAmount')->nullable();
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
