<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CONST\TB_PrefixName;

class PrefixName extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TB_PrefixName::create([
            'Name_TH' => 'นาย',
            'Name_EN' => 'Mr',
        ]);

        TB_PrefixName::create([
            'Name_TH' => 'นาง',
            'Name_EN' => 'Mrs',
        ]);

        TB_PrefixName::create([
            'Name_TH' => 'นางสาว',
            'Name_EN' => 'Ms',
        ]);

        TB_PrefixName::create([
            'Name_TH' => 'อื่นๆ',
            'Name_EN' => 'other',
        ]);
    }
}
