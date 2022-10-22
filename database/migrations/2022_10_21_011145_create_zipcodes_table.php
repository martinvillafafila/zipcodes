<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zipcodes', function (Blueprint $table) {
            $table->id();
            $table->int('d_codigo');
            $table->string('d_asenta', 255);
            $table->string('d_tipo_asenta', 255);
            $table->string('D_mnpio', 255);
            $table->string('d_estado', 255);
            $table->string('d_ciudad', 255);
            $table->int('d_CP');
            $table->int('c_estado');
            $table->int('c_oficina');
            $table->string('c_CP', 255);
            $table->int('c_tipo_asenta');
            $table->int('c_mnpio');
            $table->int('id_asenta_cpcons');
            $table->string('d_zona', 255);
            $table->int('c_cve_ciudad');
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
        Schema::dropIfExists('zipcodes');
    }
}
