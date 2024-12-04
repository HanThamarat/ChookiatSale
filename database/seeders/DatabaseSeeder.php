<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            PrefixName::class,
            CAR::class,
            CampaignTYP::class,
            InterestCampaignsSeeder::class,
            UserSeeder::class,
        ]);
        User::factory()->create([
            'name' => 'Mituboshi Worker',
            'username' => 'Mituboshi Worker',
            'email' => 'test@example.com',
        ]);
    }
}
