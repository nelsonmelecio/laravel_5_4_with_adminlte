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
            'id' => 1,
            'name' => 'Annual',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('frequency')->insert([
            'id' => 2,
            'name' => 'Semi-Annual',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('frequency')->insert([
            'id' => 3,
            'name' => 'Trimester',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('frequency')->insert([
            'id' => 4,
            'name' => 'Quarterly',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('frequency')->insert([
            'id' => 5,
            'name' => '5Times',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('frequency')->insert([
            'id' => 6,
            'name' => '2Months',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('frequency')->insert([
            'id' => 12,
            'name' => 'Monthly',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('frequency')->insert([
            'id' => 13, // original = 0
            'name' => 'Unknown',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

    }
}
