@extends('layouts.app')

@section('content')

<div class="dashboard">
    <div class="container-fluid p-4">

        <h2>Edit Mata Anggaran</h2>
        <p class="text-muted">
            Ubah data mata anggaran yang sudah ada.
        </p>

        <div class="card p-4 mt-4">

            <form>

                <!-- ID Mata Anggaran -->
                <div class="mb-3">
                    <label class="form-label">ID Mata Anggaran</label>
                    <input type="text" class="form-control" value="MA001">
                </div>

                <!-- Tahun -->
                <div class="mb-3">
                    <label class="form-label">Tahun</label>
                    <input type="text" class="form-control" value="2026">
                </div>

                <!-- Bidang -->
                <div class="mb-3">
                    <label class="form-label">Bidang</label>
                    <select class="form-select">
                        <option>Tata Usaha</option>
                        <option selected>Sosial</option>
                        <option>Nerwilis</option>
                        <option>Distribusi</option>
                        <option>IPDS</option>
                        <option>Produksi</option>
                    </select>
                </div>

                <!-- Nama Kegiatan -->
                <div class="mb-3">
                    <label class="form-label">Nama Kegiatan</label>
                    <input type="text" class="form-control" value="Pendataan Sosial Ekonomi">
                </div>

                <!-- Akun -->
                <div class="mb-3">
                    <label class="form-label">Akun</label>
                    <input type="text" class="form-control" value="521219">
                </div>

                <!-- Jumlah -->
                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="number" class="form-control" value="10">
                </div>

                <!-- Satuan -->
                <div class="mb-3">
                    <label class="form-label">Satuan</label>
                    <input type="text" class="form-control" value="Orang">
                </div>

                <!-- Harga -->
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" class="form-control" value="150000">
                </div>

                <!-- Total -->
                <div class="mb-3">
                    <label class="form-label">Total</label>
                    <input type="number" class="form-control" value="1500000">
                </div>

                <!-- Periode Kegiatan -->
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tanggal Mulai</label>
                        <input type="date" class="form-control" value="2026-07-15">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tanggal Selesai</label>
                        <input type="date" class="form-control" value="2026-08-30">
                    </div>

                </div>

                <!-- Tombol -->
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i>
                        Simpan Perubahan
                    </button>

                    <a href="/mata-anggaran" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i>
                        Kembali
                    </a>
                </div>

            </form>

        </div>

    </div>
</div>

@endsection