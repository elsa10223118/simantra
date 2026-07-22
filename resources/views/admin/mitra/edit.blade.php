@extends('layouts.app')

@section('content')

<div class="dashboard">
    <div class="container-fluid p-4">

        <h2>Edit Data Mitra</h2>
        <p class="text-muted">
            Ubah data mitra yang sudah ada.
        </p>

        <div class="card p-4 mt-4">

            <form>

                <div class="mb-3">
                    <label class="form-label">Tahun</label>
                    <input
                        type="text"
                        class="form-control"
                        value="2026">
                </div>

                <div class="mb-3">
                    <label class="form-label">ID Mitra / Sobat</label>
                    <input
                        type="text"
                        class="form-control"
                        value="SBT001">
                </div>

                <div class="mb-3">
                    <label class="form-label">NIK</label>
                    <input
                        type="text"
                        class="form-control"
                        value="3201234567890001">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input
                        type="text"
                        class="form-control"
                        value="Budi Santoso">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select class="form-select">
                        <option selected>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat Lengkap</label>
                    <textarea
                        class="form-control"
                        rows="3">Jl. Merdeka No. 10, Garut</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">No. HP</label>
                    <input
                        type="text"
                        class="form-control"
                        value="081234567890">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        value="budi@gmail.com">
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i>
                        Simpan Perubahan
                    </button>

                    <a href="/mitra" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i>
                        Kembali
                    </a>
                </div>

            </form>

        </div>

    </div>
</div>

@endsection