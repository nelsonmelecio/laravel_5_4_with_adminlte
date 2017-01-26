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
        ]);

        DB::table('status')->insert([
            'code' => 'ST102',
            'name' => 'Not Working',
            'color_coding' => 'Red',
        ]);

        DB::table('status')->insert([
            'code' => 'ST103',
            'name' => 'Missing Parts',
            'color_coding' => 'Yellow',
        ]);

        DB::table('status')->insert([
            'code' => 'ST104',
            'name' => 'Partly Functional',
            'color_coding' => 'Green',
        ]);

        DB::table('status')->insert([
            'code' => 'ST105',
            'name' => 'Fully Functional',
            'color_coding' => 'Blue',
        ]);

    }
}
