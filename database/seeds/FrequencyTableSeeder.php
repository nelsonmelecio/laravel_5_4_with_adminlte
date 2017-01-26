<?php

use Illuminate\Database\Seeder;

class FrequencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frequency')->insert([
            'id' => '0',
            'name' => 'Unknown',
        ]);

        DB::table('frequency')->insert([
            'id' => 1,
            'name' => 'Annual',
        ]);

        DB::table('frequency')->insert([
            'id' => 2,
            'name' => 'Semi-Annual',
        ]);

        DB::table('frequency')->insert([
            'id' => 3,
            'name' => 'Trimester',
        ]);

        DB::table('frequency')->insert([
            'id' => 4,
            'name' => 'Quarterly',
        ]);

        DB::table('frequency')->insert([
            'id' => 5,
            'name' => '5Times',
        ]);

        DB::table('frequency')->insert([
            'id' => 6,
            'name' => '2Months',
        ]);

        DB::table('frequency')->insert([
            'id' => 12,
            'name' => 'Monthly',
        ]);


    }
}
