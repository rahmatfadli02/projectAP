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
        Schema::create('transaksis', function (Blueprint $table) {
            
            // $table->bigInteger('mekaniks_id');
            // $table->integer('qty');
            // $table->integer('total');
            // $table->bigInteger('layanans_id');
            $table->id();
            $table->string('nofak')->unique();
            $table->date('tanggalkeluar');
            $table->bigInteger('servis_id');
            $table->integer('harga');
            $table->boolean('status');
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
        Schema::dropIfExists('transaksis');
    }
};
