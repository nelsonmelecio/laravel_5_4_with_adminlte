<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('equipment_id')->nullable();;
            $table->string('purchase_no')->nullable();;
            $table->string('purchase_cost')->nullable();;
            $table->date('purchase_date')->nullable();
            $table->date('warranty_start')->nullable();
            $table->date('warranty_expire')->nullable();
            $table->date('date_commissioned')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
