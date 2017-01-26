<?php

use Illuminate\Database\Seeder;

class TenantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tenant')->insert([
            'id' => 1,
            'code' => 'B15-Q004-RG',
            'company_name' => 'Davao Doctors Hospital',
            'business_type' => 'Hospital',
            'number_department' => '100',
            'number_equipment' => '5000',
            'license_number' => 'DBL-5634534',
            'permit_number' => 'LD324234',
            'ISO_Number' => '000-0000-11',
            'phone_number1' => '(082) 221-2101',
            'phone_number2' => '(082) 222-8000',
            'email' => 'info@ddh.com.ph',
            'website' => 'http://ddh.com.ph/',
            'country' => 'Philippines',
            'date_registered' => date('2015-09-10 00:00:00'),
            'hospital_code' => 'DDH',
            'fax_number' => '221-0940',
            'mobile_number1' => '09068100820',
            'mobile_number2' => '09068100820',
        ]);

    }
}
