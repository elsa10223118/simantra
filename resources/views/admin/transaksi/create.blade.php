@extends('layouts.app')

@section('content')

<div class="container-fluid p-4">

    <h2 class="fw-bold text-primary">Tambah Transaksi</h2>

    <p class="text-muted">
        Tambahkan data transaksi honor mitra.
    </p>

    <div class="card shadow-sm border-0 mt-4">

        <div class="card-body">

            <form>

                <!-- Tahun -->
                <div class="mb-3">
                    <label class="form-label">Tahun</label>
                    <select class="form-select">
                        <option selected disabled>Pilih Tahun</option>
                        <option>2026</option>
                    </select>
                </div>

                <!-- Nama Operator -->
                <div class="mb-3">
                    <label class="form-label">Nama Operator</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Operator">
                </div>

                <!-- Bidang -->
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

                <!-- Mitra -->
                <div class="mb-3">
                    <label class="form-label">Nama Mitra</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Mitra">
                </div>

                <!-- Kegiatan -->
                <div class="mb-3">
                    <label class="form-label">Kegiatan</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Kegiatan">
                </div>

                <!-- Honor -->
                <div class="mb-3">
                    <label class="form-label">Honor</label>
                    <input type="number" class="form-control" placeholder="Masukkan Jumlah Honor">
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select">
                        <option selected disabled>Pilih Status</option>
                        <option>Belum Dibayar</option>
                        <option>Sudah Dibayar</option>
                    </select>
                </div>

                <!-- Tanggal -->
                <div class="mb-4">
                    <label class="form-label">Tanggal</label>
                    <input type="date" class="form-control">
                </div>

                <!-- Tombol -->
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-circle"></i> Simpan
                </button>

                <a href="/transaksi" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>

            </form>

        </div>

    </div>

</div>

@endsection