<?php

use Illuminate\Database\Seeder;

class RiskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('risk')->insert([
            'id' => 1,
            'name' => 'High Risk',
        ]);

        DB::table('risk')->insert([
            'id' => 2,
            'name' => 'Medium II Risk',
        ]);
        
        DB::table('risk')->insert([
            'id' => 3,
            'name' => 'Medium I Risk',
        ]);
        
        DB::table('risk')->insert([
            'id' => 4,
            'name' => 'Low Risk',
        ]);
        
        DB::table('risk')->insert([
            'id' => 5,
            'name' => 'Unknown',
        ]);
        
    }
}
