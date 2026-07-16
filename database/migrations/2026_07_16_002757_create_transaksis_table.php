<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_transaksi', function (Blueprint $table) {

            $table->id('id_transaksi');

            $table->foreignId('id_mitra')
                  ->constrained('tbl_mitra', 'id_mitra')
                  ->cascadeOnDelete();

            $table->foreignId('id_mata')
                  ->constrained('tbl_mata_anggaran', 'id_mata')
                  ->cascadeOnDelete();

            $table->string('nip_pegawai');

            $table->foreign('nip_pegawai')
                  ->references('nip')
                  ->on('tbl_pegawai')
                  ->cascadeOnDelete();

            $table->string('bidang');

            $table->decimal('jumlah_honor', 15, 2);

            $table->dateTime('tanggal_input');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_transaksi');
    }
};