@extends('layouts.app')

@section('content')

<div class="dashboard">
    <div class="container-fluid p-4">

        <h2>Mata Anggaran</h2>
        <p class="text-muted">
            Kelola data mata anggaran dan kegiatan.
        </p>

        <div class="card p-4 mt-4">

            <div class="d-flex justify-content-between align-items-center mb-3">

                <h5 class="fw-bold">Daftar Mata Anggaran</h5>

                <a href="/mata-anggaran/create" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Mata Anggaran
                </a>

            </div>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle text-nowrap">

                    <thead class="table-light">

                        <tr>
                            <th>No</th>
                            <th>ID Mata Anggaran</th>
                            <th>Tahun</th>
                            <th>Bidang</th>
                            <th>Nama Kegiatan</th>
                            <th>Akun</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Total</th>
                            <th>Periode Kegiatan</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>MA001</td>
                            <td>2026</td>
                            <td>Sosial</td>
                            <td>Pendataan Sosial Ekonomi</td>
                            <td>521219</td>
                            <td>10</td>
                            <td>Orang</td>
                            <td>150.000</td>
                            <td>1.500.000</td>
                            <td>15 Juli 2026 - 30 Agustus 2026</td>

                            <td>
                                <div class="d-flex gap-2">
                                    <a href="/mata-anggaran/edit" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <button class="btn btn-danger btn-sm"
                                    data-bs-toggle="modal"
                                    data-bs-target="#hapusMataAnggaranModal">
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
<!-- Modal Hapus Mata Anggaran -->
<div class="modal fade" id="hapusMataAnggaranModal" tabindex="-1" aria-labelledby="hapusMataAnggaranModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="hapusMataAnggaranModalLabel">
                    <i class="bi bi-trash"></i> Hapus Mata Anggaran
                </h5>

                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <p>Apakah Anda yakin ingin menghapus data mata anggaran berikut?</p>

                <div class="mb-3">
                    <label class="form-label">ID Mata Anggaran</label>
                    <input type="text" class="form-control" value="MA001" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Kegiatan</label>
                    <input type="text" class="form-control" value="Pendataan Sosial Ekonomi" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Bidang</label>
                    <input type="text" class="form-control" value="Sosial" readonly>
                </div>

                <div class="alert alert-danger mb-0">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    Data mata anggaran yang dihapus tidak dapat dikembalikan.
                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Batal
                </button>

                <button type="button" class="btn btn-danger">
                    <i class="bi bi-trash"></i>
                    Hapus
                </button>

            </div>

        </div>
    </div>
</div>
@endsection