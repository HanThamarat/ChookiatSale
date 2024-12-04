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
            $table->date('DeliveryCheckedDate')->nullable();
            $table->date('DeliveryDate')->nullable();
            $table->integer('technocalAcsID')->nullable();
            $table->date('SSIInterviewDate1')->nullable();
            $table->date('SSIInterviewDate2')->nullable();
            $table->date('SSIInterviewDate3')->nullable();
            $table->enum('InterviewStatus', ["can_not_contact", "can_contact_call_missed", "phone_number_notfound"])->nullable();
            $table->enum('DW', ["0","1", "2", "3", "4", "5", "6", "7", "8", "9", "10"])->default('0');
            $table->enum('DF', ["0","1", "2", "3", "4", "5", "6", "7", "8", "9", "10"])->default('0');
            $table->enum('SC', ["0","1", "2", "3", "4", "5", "6", "7", "8", "9", "10"])->default('0');
            $table->enum('DEAL', ["0","1", "2", "3", "4", "5", "6", "7", "8", "9", "10"])->default('0');
            $table->enum('PC', ["0","1", "2", "3", "4", "5", "6", "7", "8", "9", "10"])->default('0');
            $table->enum('DP', ["0","1", "2", "3", "4", "5", "6", "7", "8", "9", "10"])->default('0');
            $table->enum('FU', ["0","1", "2", "3", "4", "5", "6", "7", "8", "9", "10"])->default('0');
            $table->integer('SSL')->default(0);
            $table->enum('MMTH', ["yes","no"])->default('no');
            $table->integer('SSL_FROM_MMTH')->default(0);
            $table->enum('RedAlert', ["yes","no"])->default('no');
            $table->enum('SllST', ["success","problem"])->nullable();
            $table->enum('ChangtingST', ["success","waiting"])->default('waiting');
            $table->date('ChangtingSTDate')->nullable();
            $table->float('TotalPayFromAdmin')->nullable();
            $table->float('TotalPayCus')->nullable();
            $table->float('TotalOtherPay')->nullable();
            $table->enum('Payment', ["tranfer","cash"])->nullable();
            $table->enum('PaymentST', ["success","problem"])->nullable();
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
