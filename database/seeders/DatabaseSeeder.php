<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Articles;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Tenant::checkCurrent()
           ? $this->runTenantSpecificSeeders()
           : $this->runLandlordSpecificSeeders();
    }

    public function runTenantSpecificSeeders()
    {

        die('here');
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Articles::factory()->count(rand(2,5))->create();

    }

    public function runLandlordSpecificSeeders()
    {

        die('here2');
    

    }
}
