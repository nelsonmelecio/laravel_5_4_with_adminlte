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
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('proficiency')->insert([
            'id' => 2,
            'name' => 'Level 1',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('proficiency')->insert([
            'id' => 3,
            'name' => 'Level 2',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('proficiency')->insert([
            'id' => 4,
            'name' => 'Level 3',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('proficiency')->insert([
            'id' => 5,
            'name' => 'Level 4',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('proficiency')->insert([
            'id' => 6,
            'name' => 'Level 5',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('proficiency')->insert([
            'id' => 7,
            'name' => 'Level 6',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('proficiency')->insert([
            'id' => 9,
            'name' => 'Unknown',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

    }
}
