<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_mata_anggaran', function (Blueprint $table) {

            $table->id('id_mata');

            $table->unsignedBigInteger('id_tahun');

            $table->foreign('id_tahun')
                  ->references('id_tahun')
                  ->on('tbl_tahun')
                  ->onDelete('cascade');

            $table->string('bidang');

            $table->string('nama_kegiatan');

            $table->string('akun');

            $table->integer('jumlah');

            $table->string('satuan');

            $table->decimal('harga',15,2);

            $table->decimal('total',15,2);

            $table->date('tanggal_mulai');

            $table->date('tanggal_selesai');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_mata_anggaran');
    }
};