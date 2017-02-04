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
            $table->string('business_type')->nullable();
            $table->string('number_department')->nullable();
            $table->string('number_equipment')->nullable();
            $table->string('license_number')->nullable();
            $table->string('permit_number')->nullable();
            $table->string('ISO_Number')->nullable();
            $table->string('phone_number1')->nullable();
            $table->string('phone_number2')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('country')->nullable();
            $table->date('date_registered')->nullable();
            $table->string('hospital_code')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('mobile_number1')->nullable();
            $table->string('mobile_number2')->nullable();
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
