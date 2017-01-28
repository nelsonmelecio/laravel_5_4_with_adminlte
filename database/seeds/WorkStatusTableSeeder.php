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
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('work_status')->insert([
            'code' => 'WS-102',
            'name' => 'Pending',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('work_status')->insert([
            'code' => 'WS-103',
            'name' => 'Started',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('work_status')->insert([
            'code' => 'WS-104',
            'name' => 'Not Completed',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);
        
    }
}
