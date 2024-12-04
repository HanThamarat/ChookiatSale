<?php

namespace App\Models\DATA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DATA\CARS;
use App\Models\CONST\TB_CampaignTYP;

class CAMPAIGN_CARS extends Model
{
    use HasFactory;
    protected $table = 'campaignCars';
    protected $fillable = ['CarID', 'CampaignTYP', 'SubCampaignID', 'SubCampaignType', 'CashSupport', 'CashSupportDeduct', 'CashSupportFinal','StartDate', 'EndDate'];

    public function ToCar() {
        return $this->hasOne(CARS::class, 'id', 'CarID');
    }

    public function ToCamTYP() {
        return $this->hasOne(TB_CampaignTYP::class, 'id', 'CampaignTYP');
    }
}
