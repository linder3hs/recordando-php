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
        Schema::create('renta', function (Blueprint $table) {
            $table->increments('id_renta');
            $table->date('fech_registro');
            $table->date('fech_devol');
            $table->date('fech_entrega');
            $table->foreignId('id_cliente')->nullable()->index();
            $table->foreignId('id_peli')->nullable()->index();
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
        Schema::dropIfExists('renta');
    }
};
