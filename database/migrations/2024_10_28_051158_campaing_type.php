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
        Schema::create('TB_CampaignTYP', function (Blueprint $table) {
            $table->id();
            $table->string('Name_TH')->nullable();
            $table->string('Name_EN')->nullable();
            $table->string('Description')->nullable();
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
