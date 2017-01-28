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
            'color_coding' => 'Black',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('status')->insert([
            'code' => 'ST102',
            'name' => 'Not Working',
            'color_coding' => 'Red',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('status')->insert([
            'code' => 'ST103',
            'name' => 'Missing Parts',
            'color_coding' => 'Yellow',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('status')->insert([
            'code' => 'ST104',
            'name' => 'Partly Functional',
            'color_coding' => 'Green',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('status')->insert([
            'code' => 'ST105',
            'name' => 'Fully Functional',
            'color_coding' => 'Blue',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

    }
}
