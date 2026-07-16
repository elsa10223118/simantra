<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_mitra', function (Blueprint $table) {

            $table->id('id_mitra');

            $table->unsignedBigInteger('id_tahun');

            $table->foreign('id_tahun')
                  ->references('id_tahun')
                  ->on('tbl_tahun')
                  ->onDelete('cascade');

            $table->string('id_sobat');

            $table->string('nik',16);

            $table->string('nama');

            $table->enum('jenis_kelamin',['L','P']);

            $table->text('alamat_lengkap');

            $table->string('no_hp');

            $table->string('email')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_mitra');
    }
};