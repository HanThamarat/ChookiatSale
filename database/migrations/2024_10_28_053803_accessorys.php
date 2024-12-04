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
        Schema::create('accessorys', function (Blueprint $table) {
            $table->id();
            $table->integer('Car_ID')->nullable();
            $table->string('AccessorySource')->nullable();
            $table->string('AccessoryDetail')->nullable();
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
