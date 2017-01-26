<?php

use Illuminate\Database\Seeder;

class WorkStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_status')->insert([
            'code' => 'WS-101',
            'name' => 'Completed',
        ]);

        DB::table('work_status')->insert([
            'code' => 'WS-102',
            'name' => 'Pending',
        ]);

        DB::table('work_status')->insert([
            'code' => 'WS-103',
            'name' => 'Started',
        ]);

        DB::table('work_status')->insert([
            'code' => 'WS-104',
            'name' => 'Not Completed',
        ]);
        
    }
}
