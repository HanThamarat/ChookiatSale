<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CONST\TB_CarColors;
use App\Models\CONST\TB_CarYears;
use App\Models\CONST\TB_CarModels;
use App\Models\DATA\CARS;

class CAR extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TB_CarColors::create([
            'Name_TH' => 'ขาว',
            'Name_EN' => 'White',
        ]);

        TB_CarColors::create([
            'Name_TH' => 'ดำ',
            'Name_EN' => 'black',
        ]);

        TB_CarColors::create([
            'Name_TH' => 'เขียว',
            'Name_EN' => 'green',
        ]);

        TB_CarModels::create([
            'Name_TH' => 'แอททราจ',
            'Name_EN' => 'Attrage',
        ]);

        TB_CarModels::create([
            'Name_TH' => 'ปาเจโร่ สปอร์ต',
            'Name_EN' => 'Pajero Sport',
        ]);

        TB_CarModels::create([
            'Name_TH' => 'เอ็กซ์แพนเดอร์',
            'Name_EN' => 'Xpander',
        ]);

        TB_CarYears::create([
            'Model_ID' => 1,
            'year' => '2021-01-01',
        ]);

        TB_CarYears::create([
            'Model_ID' => 1,
            'year' => '2021-01-01',
        ]);

        TB_CarYears::create([
            'Model_ID' => 1,
            'year' => '2021-01-01',
        ]);

        TB_CarYears::create([
            'Model_ID' => 2,
            'year' => '2021-01-01',
        ]);

        TB_CarYears::create([
            'Model_ID' => 3,
            'year' => '2021-01-01',
        ]);

        CARS::create([
            'Model_ID' => 1,
            'Year_ID' => 3,
            'Color_ID' => 1,
            'CarDetail' => 'ABC123',
        ]);   
    }
}
