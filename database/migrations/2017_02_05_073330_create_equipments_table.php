<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('barcode');
            $table->string('asset_number')->nullable();
            $table->string('equipment_name')->nullable();
            $table->string('equipment_description')->nullable();
            $table->integer('manufacturer_id')->nullable();
            $table->string('model')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('status')->nullable();
            $table->string('service_group')->nullable();
            $table->string('required_pm')->nullable();
            $table->string('service_provider')->nullable();
            $table->integer('frequency_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('location_id')->nullable();
            $table->string('availability')->nullable();
            $table->integer('register_id')->nullable();
            $table->integer('supplier_id')->nullable();
            $table->integer('condition_status_id')->nullable();
            $table->integer('utilization_id')->nullable();
            $table->integer('status_id')->nullable();
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
        Schema::dropIfExists('equipments');
    }
}
