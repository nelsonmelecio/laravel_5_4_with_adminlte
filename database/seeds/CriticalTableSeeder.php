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
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('critical')->insert([
            'id' => 2,
            'name' => 'Normal',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('critical')->insert([
            'id' => 3,
            'name' => 'Critical',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('critical')->insert([
            'id' => 4,
            'name' => 'Unknown',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

    }
}
