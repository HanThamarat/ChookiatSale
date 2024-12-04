<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CONST\TB_CampaignTYP;

class CampaignTYP extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TB_CampaignTYP::create([
            'Name_TH' => 'โปร RI',
            'Name_EN' => 'RI',
            'Description' => 'This campaign it so good',
            'Active' => true,
        ]);
        TB_CampaignTYP::create([
            'Name_TH' => 'อื่นๆ',
            'Name_EN' => 'Others',
            'Description' => 'This campaign it so good',
            'Active' => true,
        ]);
        TB_CampaignTYP::create([
            'Name_TH' => '(หอการค้า)',
            'Name_EN' => 'On-Top',
            'Description' => 'This campaign it so good',
            'Active' => true,
        ]);
        TB_CampaignTYP::create([
            'Name_TH' => '(KOL)',
            'Name_EN' => 'On-Top',
            'Description' => 'This campaign it so good',
            'Active' => true,
        ]);
        TB_CampaignTYP::create([
            'Name_TH' => '(Fleet)',
            'Name_EN' => 'On-Top',
            'Description' => 'This campaign it so good',
            'Active' => true,
        ]);
        TB_CampaignTYP::create([
            'Name_TH' => '(งบชูเกียรติ)',
            'Name_EN' => 'CK',
            'Description' => 'This campaign it so good',
            'Active' => true,
        ]);
    }
}
