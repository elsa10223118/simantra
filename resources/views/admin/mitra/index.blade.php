@extends('layouts.app')

@section('content')

<div class="dashboard">
    <div class="container-fluid p-4">

        <h2>Data Mitra</h2>
        <p class="text-muted">
            Kelola data mitra BPS.
        </p>

        <div class="card p-4 mt-4">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold">Daftar Mitra</h5>

                <div>
                    <a href="/mitra/create" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i>
                        Tambah Mitra
                    </a>

                    <button class="btn btn-success">
                        <i class="bi bi-upload"></i>
                        Upload
                    </button>

                    <button class="btn btn-info text-white">
                        <i class="bi bi-download"></i>
                        Download
                    </button>
                </div>
            </div>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle text-nowrap">

                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>ID Mitra / Sobat</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat Lengkap</th>
                            <th>No. HP</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>2026</td>
                            <td>SBT001</td>
                            <td>3201234567890001</td>
                            <td>Budi Santoso</td>
                            <td>Laki-laki</td>
                            <td>Jl. Merdeka No. 10, Garut</td>
                            <td>081234567890</td>
                            <td>budi@gmail.com</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="/mitra/edit" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <button class="btn btn-danger btn-sm"
                                    data-bs-toggle="modal"
                                    data-bs-target="#hapusMitraModal">
                                        Hapus
                                    </button>
                                </div>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>
</div>
<!-- Modal Hapus Data Mitra -->
<div class="modal fade" id="hapusMitraModal" tabindex="-1" aria-labelledby="hapusMitraModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="hapusMitraModalLabel">
                    Hapus Data Mitra
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <p>Apakah Anda yakin ingin menghapus data mitra berikut?</p>

                <table class="table table-borderless mb-3">
                    <tr>
                        <th width="35%">Nama Mitra</th>
                        <td>: Budi Santoso</td>
                    </tr>

                    <tr>
                        <th>ID Mitra / Sobat</th>
                        <td>: SBT001</td>
                    </tr>

                    <tr>
                        <th>NIK</th>
                        <td>: 3201234567890001</td>
                    </tr>
                </table>

                <div class="alert alert-danger mb-0">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    Data mitra yang dihapus tidak dapat dikembalikan.
                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Batal
                </button>

                <button type="button" class="btn btn-danger">
                    Hapus
                </button>

            </div>

        </div>
    </div>
</div>
@endsection