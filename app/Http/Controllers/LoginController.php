<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'role' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cari username
        $pegawai = Pegawai::where('username', $request->username)->first();

        // Username tidak ditemukan
        if (!$pegawai) {
            return back()->with('error', 'Username tidak ditemukan.');
        }

        // Password salah
        if (!Hash::check($request->password, $pegawai->password)) {
            return back()->with('error', 'Password salah.');
        }

        // Role tidak sesuai
        if ($pegawai->role_akun != $request->role) {
            return back()->with('error', 'Role tidak sesuai.');
        }

        // Simpan session
        session([
            'login' => true,
            'nip' => $pegawai->nip,
            'nama' => $pegawai->nama_pegawai,
            'role' => $pegawai->role_akun,
        ]);

        // Arahkan ke dashboard
        if ($pegawai->role_akun == 'admin') {
            return redirect('/dashboard');
        }

        return redirect('/operator/dashboard');
    }

    public function logout()
    {
        session()->flush();

        return redirect('/');
    }
}