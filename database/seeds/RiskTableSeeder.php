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
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);

        DB::table('risk')->insert([
            'id' => 2,
            'name' => 'Medium II Risk',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);
        
        DB::table('risk')->insert([
            'id' => 3,
            'name' => 'Medium I Risk',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);
        
        DB::table('risk')->insert([
            'id' => 4,
            'name' => 'Low Risk',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);
        
        DB::table('risk')->insert([
            'id' => 5,
            'name' => 'Unknown',
            'created_at' => date('Y/m/d H:i:s'),
            'updated_at' => date('Y/m/d H:i:s'),
        ]);
        
    }
}
