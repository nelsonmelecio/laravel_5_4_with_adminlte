<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('company_name');
            $table->string('business_type');
            $table->string('number_department');
            $table->string('number_equipment');
            $table->string('license_number');
            $table->string('permit_number');
            $table->string('ISO_Number');
            $table->string('phone_number1');
            $table->string('phone_number2');
            $table->string('email');
            $table->string('website');
            $table->string('country');
            $table->date('date_registered');
            $table->string('hospital_code');
            $table->string('fax_number');
            $table->string('mobile_number1');
            $table->string('mobile_number2');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenant');
    }
}
