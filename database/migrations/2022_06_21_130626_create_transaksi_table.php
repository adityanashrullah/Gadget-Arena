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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('kwitansi');
            $table->foreignId('pegawai_id')
            ->references('id')
            ->on('pegawai')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('customer_id')
            ->references('id')
            ->on('customer')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('gadget_id')
            ->references('id')
            ->on('gadget')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('transaksi');
    }
};
