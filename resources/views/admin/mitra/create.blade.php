@extends('layouts.app')

@section('content')

<div class="dashboard">
    <div class="container-fluid p-4">

        <h2>Tambah Data Mitra</h2>
        <p class="text-muted">
            Tambahkan data mitra baru.
        </p>

        <div class="card p-4 mt-4">

            <form>

                <div class="mb-3">
                    <label class="form-label">Tahun</label>
                    <input type="text" class="form-control" placeholder="Masukkan Tahun">
                </div>

                <div class="mb-3">
                    <label class="form-label">ID Mitra / Sobat</label>
                    <input type="text" class="form-control" placeholder="Masukkan ID Mitra / Sobat">
                </div>

                <div class="mb-3">
                    <label class="form-label">NIK</label>
                    <input type="text" class="form-control" placeholder="Masukkan NIK">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select class="form-select">
                        <option selected disabled>Pilih Jenis Kelamin</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" rows="3" placeholder="Masukkan Alamat Lengkap"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">No. HP</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nomor HP">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Masukkan Email">
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-circle"></i> Simpan
                    </button>

                    <a href="/mitra" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>

            </form>

        </div>

    </div>
</div>

@endsection