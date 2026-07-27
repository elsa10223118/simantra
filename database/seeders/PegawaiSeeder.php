<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tbl_pegawai')->insert([
            'nip' => '1987001',
            'nama_pegawai' => 'Administrator',
            'username' => 'admin',
            'password' => Hash::make('admin123'),
            'no_hp' => '081234567890',
            'foto' => null,
            'role_akun' => 'admin',
            'operator_bidang' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}