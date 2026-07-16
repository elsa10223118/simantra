<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_sbml', function (Blueprint $table) {

            $table->id('id_sbml');

            $table->unsignedBigInteger('id_tahun');

            $table->foreign('id_tahun')
                  ->references('id_tahun')
                  ->on('tbl_tahun')
                  ->onDelete('cascade');

            $table->string('bidang');

            $table->decimal('maksimal_honor',15,2);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_sbml');
    }
};