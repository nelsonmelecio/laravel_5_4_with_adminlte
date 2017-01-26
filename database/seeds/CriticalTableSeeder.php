<?php

use Illuminate\Database\Seeder;

class CriticalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('critical')->insert([
            'id' => 1,
            'name' => 'General',
        ]);

        DB::table('critical')->insert([
            'id' => 2,
            'name' => 'Normal',
        ]);

        DB::table('critical')->insert([
            'id' => 3,
            'name' => 'Critical',
        ]);

        DB::table('critical')->insert([
            'id' => 4,
            'name' => 'Unknown',
        ]);

    }
}
