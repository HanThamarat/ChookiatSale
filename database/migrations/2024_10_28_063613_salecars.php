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
        Schema::create('saleCars', function (Blueprint $table) {
            $table->id();
            $table->date('KeyInDate')->nullable();
            $table->integer('CarID')->nullable();
            $table->integer('CusID')->nullable();
            $table->integer('SaleConsultantID')->nullable();
            $table->integer('FinanceID')->nullable();
            $table->date('BookingDate')->nullable();
            $table->date('DeliveryDate')->nullable();
            $table->date('DeliveryInDMSDate')->nullable();
            $table->date('DeliveryInCKDate')->nullable();
            $table->date('RegistrationProvince')->nullable();
            $table->string('RedPlateReceived')->nullable();
            $table->float('RedPlateAmount')->nullable();
            $table->float('CarSalePrice')->nullable();
            $table->float('MarkupPrice')->nullable();
            $table->float('CarSalePriceFinal')->nullable();
            $table->float('DownPayment')->nullable();
            $table->float('DownPaymentPercentage')->nullable();
            $table->float('CashDeposit')->nullable();
            $table->float('TradeinAddition')->nullable();
            $table->float('AdditionFromCustomer')->nullable();
            $table->float('TotalPaymentatDelivery')->nullable();
            $table->integer('ReferentPersonID')->nullable();
            $table->float('CashSupportFromMarkup')->nullable();
            $table->string('TotalSaleCampaign')->nullable();
            $table->float('CashSupportInterestPlus')->nullable();
            $table->float('TotalCashSupport')->nullable();
            $table->float('TotalAccessoryUsed')->nullable();
            $table->float('TotalCashSupportUsed')->nullable();
            $table->float('RemainingCashSuuportShared')->nullable();
            $table->float('SCCommissionIntPlus')->nullable();
            $table->float('AccessoryComAmount')->nullable();
            $table->float('Trade-inComAmount')->nullable();
            $table->float('CommissionDeduct')->nullable();
            $table->string('ApprovalSignature')->nullable();
            $table->float('FinanceAmount')->nullable();
            $table->float('InterestRate')->nullable();
            $table->integer('InterestCampaignID')->nullable();
            $table->integer('InstallmentPeriod')->nullable();
            $table->float('EXC_ALP')->nullable();
            $table->float('INC_ALP')->nullable();
            $table->float('ALPAmount')->nullable();
            $table->integer('SMSignature')->nullable();
            $table->date('SMCheckedDate')->nullable();
            $table->integer('AdminSignature')->nullable();
            $table->date('AdminCheckedDate')->nullable();
            $table->integer('CheckerID')->nullable();
            $table->date('CheckerCheckedDate')->nullable();
            $table->string('Note')->nullable();
            $table->string('Steps')->nullable();
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
