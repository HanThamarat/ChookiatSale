<?php

namespace App\Models\DATA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\DATA\Customers;

class SaleCars extends Model
{
    use HasFactory;
    protected $table = 'saleCars';
    protected $fillable = [
        'KeyInDate', 'CusID', 'CarID', 'SaleConsultantID', 'FinanceID', 'BookingDate', 'DeliveryDate', 
        'DeliveryInDMSDate', 'DeliveryInCKDate', 'RegistrationProvince', 'RedPlateReceived',
        'RedPlateAmount', 'CarSalePrice', 'MarkupPrice', 'CarSalePriceFinal', 'DownPayment',
        'DownPaymentPercentage', 'CashDeposit', 'TradeinAddition', 'AdditionFromCustomer',
        'TotalPaymentatDelivery', 'ReferentPersonID', 'CashSupportFromMarkup', 'TotalSaleCampaign',
        'CashSupportInterestPlus', 'TotalCashSupport', 'TotalAccessoryUsed', 'TotalCashSupportUsed',
        'RemainingCashSuuportShared', 'SCCommissionIntPlus', 'AccessoryComAmount', 'Trade-inComAmount',
        'CommissionDeduct', 'ApprovalSignature', 'FinanceAmount', 'InterestRate', 'InterestCampaignID',
        'InstallmentPeriod', 'EXC_ALP', 'INC_ALP', 'ALPAmount', 'SMSignature', 'SMCheckedDate', 'AdminSignature',
        'AdminCheckedDate', 'CheckerID', 'CheckerCheckedDate', 'Note'
    ];

    public function ToCus() {
        return $this->hasOne(Customers::class, 'id', 'CusID');
    }
}
