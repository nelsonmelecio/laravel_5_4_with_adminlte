<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManufacturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('company_name');
            $table->string('contact_person')->nullable();
            $table->string('company_address')->nullable();
            $table->string('province')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('phone_number1')->nullable();
            $table->string('phone_number2')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('mobile_number1')->nullable();
            $table->string('mobile_number2')->nullable();
            $table->string('email_address')->nullable();
            $table->string('web_addess')->nullable();
            $table->string('country')->nullable();
            $table->string('tenant_id')->nullable();
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
        Schema::dropIfExists('manufacturers');
    }
}
