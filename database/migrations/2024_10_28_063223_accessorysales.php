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
        Schema::create('accessorySale', function (Blueprint $table) {
            $table->id();
            $table->integer('SaleID')->nullable();
            $table->integer('AccessoryID')->nullable();
            $table->integer('AccessoryType')->nullable();
            $table->enum('AccessoryPaidSource', ['saling', 'pay'])->nullable();
            $table->float('AccessoryPrice')->nullable();
            $table->integer('AccessoryCom')->nullable();
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
