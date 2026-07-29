@extends('layouts.app')

@section('content')

<div class="dashboard">
    <div class="container-fluid p-4">

        <h2>Edit Akun Pegawai</h2>

        <p class="text-muted">
            Ubah informasi akun pegawai yang terdaftar pada sistem SIMANTRA.
        </p>

        <div class="card p-4 mt-4">

            <form action="{{ route('pegawai.update', $pegawai->nip) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">NIP</label>
                    <input
                        type="text"
                        name="nip"
                        class="form-control"
                        value="{{ old('nip', $pegawai->nip) }}"
                        readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Pegawai</label>
                    <input
                        type="text"
                        name="nama_pegawai"
                        class="form-control"
                        value="{{ old('nama_pegawai', $pegawai->nama_pegawai) }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">No. HP</label>
                    <input
                        type="text"
                        name="no_hp"
                        class="form-control"
                        value="{{ old('no_hp', $pegawai->no_hp) }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto</label>

                    <input
                        type="file"
                        name="foto"
                        class="form-control">

                    <small class="text-muted">
                        Kosongkan jika foto tidak ingin diubah.
                    </small>

                </div>

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input
                        type="text"
                        name="username"
                        class="form-control"
                        value="{{ old('username', $pegawai->username) }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Role</label>

                    <select
                        name="role_akun"
                        class="form-select"
                        required>

                        <option value="admin" {{ $pegawai->role_akun == 'admin' ? 'selected' : '' }}>
                            Admin
                        </option>

                        <option value="operator" {{ $pegawai->role_akun == 'operator' ? 'selected' : '' }}>
                            Operator
                        </option>

                    </select>

                </div>

                <div class="mb-3">
                    <label class="form-label">Bidang</label>

                    <select
                        name="operator_bidang"
                        class="form-select">

                        <option value="Tata Usaha" {{ $pegawai->operator_bidang == 'Tata Usaha' ? 'selected' : '' }}>Tata Usaha</option>

                        <option value="Sosial" {{ $pegawai->operator_bidang == 'Sosial' ? 'selected' : '' }}>Sosial</option>

                        <option value="Nerwilis" {{ $pegawai->operator_bidang == 'Nerwilis' ? 'selected' : '' }}>Nerwilis</option>

                        <option value="Distribusi" {{ $pegawai->operator_bidang == 'Distribusi' ? 'selected' : '' }}>Distribusi</option>

                        <option value="IPDS" {{ $pegawai->operator_bidang == 'IPDS' ? 'selected' : '' }}>IPDS</option>

                        <option value="Produksi" {{ $pegawai->operator_bidang == 'Produksi' ? 'selected' : '' }}>Produksi</option>

                    </select>

                </div>

                <div class="mt-4">

                    <button
                        type="submit"
                        class="btn btn-primary">

                        <i class="bi bi-check-circle me-1"></i>
                        Simpan Perubahan

                    </button>

                    <a
                        href="{{ route('pegawai.index') }}"
                        class="btn btn-secondary">

                        <i class="bi bi-arrow-left me-1"></i>
                        Kembali

                    </a>

                </div>

            </form>

        </div>

    </div>
</div>

@endsection