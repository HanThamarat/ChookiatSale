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
        Schema::create('campaignCars', function (Blueprint $table) {
            $table->id();
            $table->integer('CarID')->nullable();
            $table->integer('CampaignTYP')->nullable();
            $table->string('SubCampaignID')->nullable();
            $table->string('SubCampaignType')->nullable();
            $table->float('CashSupport')->nullable();
            $table->float('CashSupportDeduct')->nullable();
            $table->float('CashSupportFinal')->nullable();
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
