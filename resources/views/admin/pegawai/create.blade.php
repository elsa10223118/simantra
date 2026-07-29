@extends('layouts.app')

@section('content')

<div class="dashboard">
    <div class="container-fluid p-4">

        <h2>Tambah Akun Pegawai</h2>

        <p class="text-muted">
            Tambahkan akun pegawai baru untuk mengakses sistem SIMANTRA.
        </p>

        <div class="card p-4 mt-4">

            <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label class="form-label">NIP</label>
                    <input
                        type="text"
                        name="nip"
                        class="form-control"
                        placeholder="Masukkan NIP"
                        value="{{ old('nip') }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Pegawai</label>
                    <input
                        type="text"
                        name="nama_pegawai"
                        class="form-control"
                        placeholder="Masukkan Nama Pegawai"
                        value="{{ old('nama_pegawai') }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">No. HP</label>
                    <input
                        type="text"
                        name="no_hp"
                        class="form-control"
                        placeholder="Masukkan Nomor HP"
                        value="{{ old('no_hp') }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input
                        type="file"
                        name="foto"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input
                        type="text"
                        name="username"
                        class="form-control"
                        placeholder="Masukkan Username"
                        value="{{ old('username') }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukkan Password"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Konfirmasi Password</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        class="form-control"
                        placeholder="Masukkan kembali Password"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Role</label>
                    <select
                        name="role_akun"
                        class="form-select"
                        required>

                        <option value="">Pilih Role</option>
                        <option value="admin">Admin</option>
                        <option value="operator">Operator</option>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Bidang</label>

                    <select
                        name="operator_bidang"
                        class="form-select">

                        <option value="">Pilih Bidang</option>
                        <option value="Tata Usaha">Tata Usaha</option>
                        <option value="Sosial">Sosial</option>
                        <option value="Nerwilis">Nerwilis</option>
                        <option value="Distribusi">Distribusi</option>
                        <option value="IPDS">IPDS</option>
                        <option value="Produksi">Produksi</option>

                    </select>

                </div>

                <div class="mt-4">

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-circle me-1"></i>
                        Simpan
                    </button>

                    <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left me-1"></i>
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection