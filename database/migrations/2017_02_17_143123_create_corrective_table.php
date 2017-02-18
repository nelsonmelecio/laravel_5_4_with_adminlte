<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorrectiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corrective', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->integer('critical_id')->nullable();
            $table->integer('classification_id')->nullable();
            $table->integer('frequency_id')->nullable();
            $table->integer('risk_id')->nullable();
            $table->string('life_service')->nullable();
            $table->string('asset_definition')->nullable();
            $table->integer('proficiency_id')->nullable();
            $table->string('ecri_code')->nullable();
            $table->integer('tenant_id')->nullable();
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
        Schema::dropIfExists('corrective');
    }
}
