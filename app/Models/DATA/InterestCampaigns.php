<?php

namespace App\Models\DATA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterestCampaigns extends Model
{
    use HasFactory;
    protected $table = 'interestCampaigns';
    protected $fillable = ['id', 'IntestCampaignType', 'CashSupport', 'PercentIntCom', 'ComSale', 'IntRate', 'StartDate', 'EndDate'];
}
