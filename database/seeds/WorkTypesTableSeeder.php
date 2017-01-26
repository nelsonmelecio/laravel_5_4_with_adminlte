<?php

use Illuminate\Database\Seeder;

class WorkTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_types')->insert([
            'code' => 'W-101',
            'name' => 'Unscheduled',
        ]);

        DB::table('work_types')->insert([
            'code' => 'W-102',
            'name' => 'Scheduled',
        ]);

    }
}
