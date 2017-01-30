<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'code' => 'ST101',
            'name' => 'Replace',
            'color' => 'Black',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('status')->insert([
            'code' => 'ST102',
            'name' => 'Not Working',
            'color' => 'Red',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('status')->insert([
            'code' => 'ST103',
            'name' => 'Missing Parts',
            'color' => 'Yellow',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('status')->insert([
            'code' => 'ST104',
            'name' => 'Partly Functional',
            'color' => 'Green',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('status')->insert([
            'code' => 'ST105',
            'name' => 'Fully Functional',
            'color' => 'Blue',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

    }
}
