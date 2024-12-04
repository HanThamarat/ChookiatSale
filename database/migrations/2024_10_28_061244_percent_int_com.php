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
        Schema::create('TB_PercentIntCom', function (Blueprint $table) {
            $table->id();
            $table->string('PercentIntCom')->nullable();
            $table->float('CashSupportInterestPlus')->nullable();
            $table->float('SCCommissionIntPlus')->nullable();
            $table->string('Active')->default('active')->nullable();
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
