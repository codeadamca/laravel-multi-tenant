<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Admin;
use Spatie\Multitenancy\Models\Tenant;

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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Article::factory()->count(rand(2,5))->create();

    }

    public function runLandlordSpecificSeeders()
    {

        Tenant::create([
            'name' => 'Tenant 1',
            'domain' => 'local.tenant1.com',
            'database' => 'brevis_saas_tenant_1',
        ]);

        Tenant::create([
            'name' => 'Tenant 2',
            'domain' => 'local.tenant2.com',
            'database' => 'brevis_saas_tenant_2',
        ]);

        Admin::factory()->count(3)->create();

    }
}
