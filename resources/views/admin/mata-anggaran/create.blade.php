@extends('layouts.app')

@section('content')

<div class="dashboard">
    <div class="container-fluid p-4">

        <h2>Tambah Mata Anggaran</h2>
        <p class="text-muted">
            Tambahkan data mata anggaran baru.
        </p>

        <div class="card p-4 mt-4">

            <form>

                <!-- ID Mata Anggaran -->
                <div class="mb-3">
                    <label class="form-label">ID Mata Anggaran</label>
                    <input type="text" class="form-control" placeholder="Masukkan ID Mata Anggaran">
                </div>

                <!-- Tahun -->
                <div class="mb-3">
                    <label class="form-label">Tahun</label>
                    <input type="text" class="form-control" placeholder="Masukkan Tahun">
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

                <!-- Nama Kegiatan -->
                <div class="mb-3">
                    <label class="form-label">Nama Kegiatan</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Kegiatan">
                </div>

                <!-- Akun -->
                <div class="mb-3">
                    <label class="form-label">Akun</label>
                    <input type="text" class="form-control" placeholder="Masukkan Kode Akun">
                </div>

                <!-- Jumlah -->
                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="number" class="form-control" placeholder="Masukkan Jumlah">
                </div>

                <!-- Satuan -->
                <div class="mb-3">
                    <label class="form-label">Satuan</label>
                    <input type="text" class="form-control" placeholder="Contoh: Orang, Dokumen, Paket">
                </div>

                <!-- Harga -->
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" class="form-control" placeholder="Masukkan Harga">
                </div>

                <!-- Total -->
                <div class="mb-3">
                    <label class="form-label">Total</label>
                    <input type="number" class="form-control" placeholder="Masukkan Total">
                </div>

                <!-- Periode Kegiatan -->
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tanggal Mulai</label>
                        <input type="date" class="form-control" value="{{ date('Y-m-d') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tanggal Selesai</label>
                        <input type="date" class="form-control">
                    </div>

                </div>

                <!-- Tombol -->
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-circle"></i> Simpan
                    </button>

                    <a href="/mata-anggaran" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>

            </form>

        </div>

    </div>
</div>

@endsection