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
        Schema::create('saleCampaigns', function (Blueprint $table) {
            $table->id();
            $table->integer('SaleID')->nullable();
            $table->integer('CampaignID')->nullable();
            $table->integer('CampaignType')->nullable();
            $table->float('CashSupport')->nullable();
            $table->float('CashSupportDeduct')->nullable();
            $table->float('CashSupportFinal')->nullable();
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
