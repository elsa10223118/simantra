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
        Schema::create('tbl_pegawai', function (Blueprint $table) {

            $table->string('nip')->primary();

            $table->string('nama_pegawai');

            $table->string('no_hp');

            $table->string('foto')->nullable();

            $table->enum('role_akun', ['admin', 'operator']);

            $table->string('operator_bidang');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pegawai');
    }
};