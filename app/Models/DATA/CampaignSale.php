<?php

namespace App\Models\DATA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignSale extends Model
{
    use HasFactory;
    protected $table = 'saleCampaigns';
    protected $fillable = ['id', 'SaleID', 'CampaignID', 'CampaignType', 'CashSupport', 'CashSupportDeduct', 'CashSupportFinal'];
}
