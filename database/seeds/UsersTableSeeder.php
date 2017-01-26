<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         DB::table('users')->insert([
            'name' => 'alger',
            'code' => 'SGE15-C001-EP',
            'employee_id' => '1',
            'username' => 'alger',
            'email' =>  str_random(10).'@gmail.com',
            'password' => bcrypt('sgeFORRESETPWD'),
            'type' => 1,
            'created_at' => date("Y-m-d H:i:s"),
        ]);

         DB::table('users')->insert([
            'name' => 'john',
            'code' => 'SGE15-C002-EP',
            'employee_id' => '1',
            'username' => 'john',
            'email' =>  str_random(10).'@gmail.com',
            'password' => bcrypt('sgeFORRESETPWD'),
            'type' => 1,
            'created_at' => date("Y-m-d H:i:s"),
        ]);

         DB::table('users')->insert([
            'name' => 'cbyee',
            'code' => 'SGE15-U003-US',
            'employee_id' => '5',
            'username' => 'cbyee',
            'email' =>  str_random(10).'@gmail.com',
            'password' => bcrypt('sgeFORRESETPWD'),
            'type' => 2,
            'created_at' => date("Y-m-d H:i:s"),
        ]);

         DB::table('users')->insert([
            'name' => 'bernadeth',
            'code' => 'SGE15-U004-US',
            'employee_id' => '9',
            'username' => 'bernadeth',
            'email' =>  str_random(10).'@gmail.com',
            'password' => bcrypt('sgeFORRESETPWD'),
            'type' => 2,
            'created_at' => date("Y-m-d H:i:s"),
        ]);

         DB::table('users')->insert([
            'name' => 'lsviolan',
            'code' => 'SGE15-U005-US',
            'employee_id' => '7',
            'username' => 'lsviolan',
            'email' =>  str_random(10).'@gmail.com',
            'password' => bcrypt('sgeFORRESETPWD'),
            'type' => 2,
            'created_at' => date("Y-m-d H:i:s"),
        ]);

         DB::table('users')->insert([
            'name' => 'SGE Admin',
            'code' => 'SUPER_ADMIN',
            'employee_id' => '0',
            'username' => 'SGE Admin',
            'email' =>  'nelsonmelecio@yahoo.com',
            'password' => bcrypt('ntmADMIN'),
            'type' => 0,
            'created_at' => date("Y-m-d H:i:s"),
        ]);


    }
}
