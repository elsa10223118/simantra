@extends('layouts.app')

@section('content')

<div class="dashboard">
    <div class="container-fluid p-4">

        <h2>Tambah Akun Pegawai</h2>

        <p class="text-muted">
            Tambahkan akun pegawai baru untuk mengakses sistem SIMANTRA.
        </p>

        <div class="card p-4 mt-4">

            <form>

                <div class="mb-3">
                    <label class="form-label">NIP</label>
                    <input type="text" class="form-control" placeholder="Masukkan NIP">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Pegawai</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Pegawai">
                </div>

                <div class="mb-3">
                    <label class="form-label">No. HP</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nomor HP">
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" placeholder="Masukkan Username">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Masukkan Password">
                </div>

                <div class="mb-3">
                    <label class="form-label">Role</label>
                    <select class="form-select">
                        <option selected disabled>Pilih Role</option>
                        <option>Admin</option>
                        <option>Operator</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Bidang</label>
                    <select class="form-select">
                        <option selected disabled>Pilih Bidang</option>
                        <option>Tata Usaha</option>
                        <option>Sosial</option>
                        <option>Nerwilis</option>
                        <option>Distribusi</option>
                        <option>IPDS</option>
                        <option>Produksi</option>
                    </select>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-circle"></i>
                        Simpan
                    </button>

                    <a href="/pegawai" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i>
                        Kembali
                    </a>
                </div>

            </form>

        </div>

    </div>
</div>

@endsection