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
        Schema::create('interestCampaigns', function (Blueprint $table) {
            $table->id();
            $table->integer('IntestCampaignType')->nullable();
            $table->float('CashSupport')->nullable();
            $table->integer('PercentIntCom')->nullable();
            $table->float('ComSale')->nullable();
            $table->float('IntRate')->nullable();
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
