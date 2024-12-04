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
        Schema::create('sscCommission', function (Blueprint $table) {
            $table->id();
            $table->integer('saleID')->nullable();
            $table->integer('sscID')->nullable();
            $table->float('RemainingCashSuuportShared')->nullable();
            $table->float('AccessoryComAmount')->nullable();
            $table->float('SCCommissionIntPlus')->nullable();
            $table->float('TradeinComAmount')->nullable();
            $table->string('OtherCommission')->nullable();
            $table->float('TotalCommissionRecieved')->nullable();
            $table->float('CommissionDeduct')->nullable();
            $table->float('OtherCommissionDeduct')->nullable();
            $table->float('TotalCommissionDeduct')->nullable();
            $table->float('NetCommission')->nullable();
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
