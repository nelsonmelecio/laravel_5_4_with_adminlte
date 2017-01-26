<?php

use Illuminate\Database\Seeder;

class ProficiencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proficiency')->insert([
            'id' => 1,
            'name' => 'Level 0',
        ]);

        DB::table('proficiency')->insert([
            'id' => 2,
            'name' => 'Level 1',
        ]);

        DB::table('proficiency')->insert([
            'id' => 3,
            'name' => 'Level 2',
        ]);

        DB::table('proficiency')->insert([
            'id' => 4,
            'name' => 'Level 3',
        ]);

        DB::table('proficiency')->insert([
            'id' => 5,
            'name' => 'Level 4',
        ]);

        DB::table('proficiency')->insert([
            'id' => 6,
            'name' => 'Level 5',
        ]);

        DB::table('proficiency')->insert([
            'id' => 7,
            'name' => 'Level 6',
        ]);

        DB::table('proficiency')->insert([
            'id' => 9,
            'name' => 'Unknown',
        ]);

    }
}
