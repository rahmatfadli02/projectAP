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
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->string('jenislayanan');
            // $table->bigInteger('mekanik_id');
            // $table->string('jenislayanan');
            // $table->date('tanggallayanan');
            // $table->string('alamat');
            // $table->string('no_hp');
            // // $table->string('harga');
            // $table->string('keterangan');
            // // $table->string('biayatambahan');
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
        Schema::dropIfExists('layanans');
    }
};
