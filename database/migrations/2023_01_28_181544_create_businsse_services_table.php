<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businsse_services', function (Blueprint $table) {
            $table->id('ser_id');
            $table->string('servic_name');
            $table->text('servic_details');
            $table->string('service_img');
            $table->unsignedBiginteger('cagy_id');
            $table->foreign('cagy_id')->references('cagy_id')->on('cagy_services');
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
        Schema::dropIfExists('businsse_services');
    }
};
