<?php

use Illuminate\Database\Seeder;

class ClassificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classification')->insert([
            'id' => 1,
            'name' => 'Unknown',
        ]);

        DB::table('classification')->insert([
            'id' => 2,
            'name' => 'Diagnostic',
        ]);

        DB::table('classification')->insert([
            'id' => 3,
            'name' => 'General',
        ]);

        DB::table('classification')->insert([
            'id' => 4,
            'name' => 'Laboratory',
        ]);

        DB::table('classification')->insert([
            'id' => 5,
            'name' => 'Life Support',
        ]);

        DB::table('classification')->insert([
            'id' => 6,
            'name' => 'Test Device',
        ]);

        DB::table('classification')->insert([
            'id' => 7,
            'name' => 'Therapeutic',
        ]);
    }
}
