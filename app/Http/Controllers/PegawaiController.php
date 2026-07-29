<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    /**
     * Menampilkan daftar pegawai
     */
    public function index()
    {
        $pegawais = Pegawai::all();

        return view('admin.pegawai.index', compact('pegawais'));
    }

    /**
     * Menampilkan halaman tambah pegawai
     */
    public function create()
    {
        return view('admin.pegawai.create');
    }

    /**
     * Menyimpan data pegawai
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:tbl_pegawai,nip',
            'nama_pegawai' => 'required',
            'username' => 'required|unique:tbl_pegawai,username',
            'password' => 'required|confirmed',
            'no_hp' => 'required',
            'role_akun' => 'required',
            'operator_bidang' => 'nullable',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $namaFoto = null;

        if ($request->hasFile('foto')) {
            $namaFoto = $request->file('foto')->store('pegawai', 'public');
        }

        Pegawai::create([
            'nip' => $request->nip,
            'nama_pegawai' => $request->nama_pegawai,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
            'foto' => $namaFoto,
            'role_akun' => $request->role_akun,
            'operator_bidang' => $request->operator_bidang,
        ]);

        return redirect()->route('pegawai.index')
            ->with('success', 'Data pegawai berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit
     */
    public function edit(string $nip)
    {
        $pegawai = Pegawai::findOrFail($nip);

        return view('admin.pegawai.edit', compact('pegawai'));
    }

    /**
     * Update data pegawai
     */
    public function update(Request $request, string $nip)
    {
        $pegawai = Pegawai::findOrFail($nip);

        $request->validate([
            'nama_pegawai' => 'required',
            'username' => 'required|unique:tbl_pegawai,username,' . $pegawai->nip . ',nip',
            'no_hp' => 'required',
            'role_akun' => 'required',
            'operator_bidang' => 'nullable',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {

            if ($pegawai->foto && Storage::disk('public')->exists($pegawai->foto)) {
                Storage::disk('public')->delete($pegawai->foto);
            }

            $pegawai->foto = $request->file('foto')->store('pegawai', 'public');
        }

        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->username = $request->username;
        $pegawai->no_hp = $request->no_hp;
        $pegawai->role_akun = $request->role_akun;
        $pegawai->operator_bidang = $request->operator_bidang;

        $pegawai->save();

        return redirect()->route('pegawai.index')
            ->with('success', 'Data pegawai berhasil diperbarui.');
    }

    /**
     * Hapus data pegawai
     */
    public function destroy(string $nip)
    {
        //
    }
}