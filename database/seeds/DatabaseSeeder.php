<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(WorkTypesTableSeeder::class);
        $this->call(WorkStatusTableSeeder::class);
        $this->call(CriticalTableSeeder::class);
        $this->call(ClassificationTableSeeder::class);
        $this->call(FrequencyTableSeeder::class);
        $this->call(RiskTableSeeder::class);
        $this->call(ProficiencyTableSeeder::class);
        $this->call(TenantTableSeeder::class);
    }
}
