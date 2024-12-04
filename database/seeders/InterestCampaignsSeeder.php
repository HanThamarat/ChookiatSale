<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DATA\InterestCampaigns;
use Carbon\Carbon;

class InterestCampaignsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $currentDate = now()->toDateString();

        $data = [
            [
                'IntestCampaignType' => 1,
                'CashSupport' => 0,
                'PercentIntCom' => 0,
                'ComSale' => 0,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 1,
                'CashSupport' => 0,
                'PercentIntCom' => 4,
                'ComSale' => 0,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 1,
                'CashSupport' => 0,
                'PercentIntCom' => 8,
                'ComSale' => 0,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 1,
                'CashSupport' => 0,
                'PercentIntCom' => 10,
                'ComSale' => 500,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 1,
                'CashSupport' => 1500,
                'PercentIntCom' => 12,
                'ComSale' => 800,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 1,
                'CashSupport' => 2500,
                'PercentIntCom' => 14,
                'ComSale' => 1000,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 1,
                'CashSupport' => 3000,
                'PercentIntCom' => 16,
                'ComSale' => 1200,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            // type of 2
            [
                'IntestCampaignType' => 2,
                'CashSupport' => 20000,
                'PercentIntCom' => 0,
                'ComSale' => 0,
                'IntRate' => 0,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 2,
                'CashSupport' => 20000,
                'PercentIntCom' => 4,
                'ComSale' => 0,
                'IntRate' => 0,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 2,
                'CashSupport' => 20000,
                'PercentIntCom' => 8,
                'ComSale' => 0,
                'IntRate' => 0,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 2,
                'CashSupport' => 20000,
                'PercentIntCom' => 10,
                'ComSale' => 0,
                'IntRate' => 0,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 2,
                'CashSupport' => 20000,
                'PercentIntCom' => 12,
                'ComSale' => 0,
                'IntRate' => 0,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 2,
                'CashSupport' => 20000,
                'PercentIntCom' => 14,
                'ComSale' => 0,
                'IntRate' => 0,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 2,
                'CashSupport' => 20000,
                'PercentIntCom' => 16,
                'ComSale' => 0,
                'IntRate' => 0,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 2,
                'CashSupport' => 20000,
                'PercentIntCom' => 0,
                'ComSale' => 0,
                'IntRate' => 0,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 2,
                'CashSupport' => 20000,
                'PercentIntCom' => 4,
                'ComSale' => 0,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 2,
                'CashSupport' => 20000,
                'PercentIntCom' => 8,
                'ComSale' => 0,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 2,
                'CashSupport' => 20000,
                'PercentIntCom' => 10,
                'ComSale' => 500,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 2,
                'CashSupport' => 21500,
                'PercentIntCom' => 12,
                'ComSale' => 8000,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 2,
                'CashSupport' => 22500,
                'PercentIntCom' => 14,
                'ComSale' => 1000,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 2,
                'CashSupport' => 23000,
                'PercentIntCom' => 16,
                'ComSale' => 1200,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            // type of 3
            [
                'IntestCampaignType' => 3,
                'CashSupport' => 0,
                'PercentIntCom' => 0,
                'ComSale' => 0,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 3,
                'CashSupport' => 0,
                'PercentIntCom' => 4,
                'ComSale' => 0,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 3,
                'CashSupport' => 0,
                'PercentIntCom' => 8,
                'ComSale' => 0,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 3,
                'CashSupport' => 0,
                'PercentIntCom' => 10,
                'ComSale' => 500,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 3,
                'CashSupport' => 1500,
                'PercentIntCom' => 12,
                'ComSale' => 800,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 3,
                'CashSupport' => 2500,
                'PercentIntCom' => 14,
                'ComSale' => 1000,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
            [
                'IntestCampaignType' => 3,
                'CashSupport' => 3000,
                'PercentIntCom' => 16,
                'ComSale' => 1200,
                'IntRate' => 3,
                'StartDate' => $currentDate,
                'EndDate' => $currentDate,
            ],
        ];

        InterestCampaigns::insert($data);
    }
}
