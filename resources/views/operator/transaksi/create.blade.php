@extends('layouts.app')

@section('content')

<div class="container-fluid p-4">

    <h2 class="fw-bold text-primary">Tambah Transaksi</h2>

    <p class="text-muted">
        Tambahkan transaksi kegiatan sesuai tugas operator pada bidang yang telah ditetapkan.
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

                <!-- Nama Mitra -->
                <div class="mb-3">
                    <label class="form-label">Nama Mitra</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Mitra">
                </div>

                <!-- Kegiatan -->
                <div class="mb-3">
                    <label class="form-label">Kegiatan</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Kegiatan">
                </div>

                <!-- Jumlah Honor -->
                <div class="mb-3">
                    <label class="form-label">Jumlah Honor</label>
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
                    <i class="bi bi-check-circle"></i>
                    Simpan
                </button>

                <a href="/operator/transaksi" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i>
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

@endsection