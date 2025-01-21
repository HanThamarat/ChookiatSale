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
        Schema::create('ssCommission', function (Blueprint $table) {
            $table->id();
            $table->integer('saleID')->nullable();
            $table->integer('sscID')->nullable();
            $table->date('DeliveryCheckedDate')->nullable();
            $table->date('DeliveryDate')->nullable();
            $table->integer('technocalAcsID')->nullable();
            $table->date('SSIInterviewDate1')->nullable();
            $table->date('SSIInterviewDate2')->nullable();
            $table->date('SSIInterviewDate3')->nullable();
            $table->string('InterviewStatus')->nullable();
            $table->string('DW')->default('0');
            $table->string('DF')->default('0');
            $table->string('SC')->default('0');
            $table->string('DEAL')->default('0');
            $table->string('PC')->default('0');
            $table->string('DP')->default('0');
            $table->string('FU')->default('0');
            $table->integer('SSL')->default(0);
            $table->string('MMTH')->default('no');
            $table->integer('SSL_FROM_MMTH')->default(0);
            $table->string('RedAlert')->default('no');
            $table->string('SllST')->nullable();
            $table->string('ChangtingST')->default('waiting');
            $table->date('ChangtingSTDate')->nullable();
            $table->float('TotalPayFromAdmin')->nullable();
            $table->float('TotalPayCus')->nullable();
            $table->float('TotalOtherPay')->nullable();
            $table->string('Payment')->nullable();
            $table->string('PaymentST')->nullable();
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
