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
                                    <button class="btn btn-warning btn-sm">
                                        Edit
                                    </button>

                                    <button class="btn btn-danger btn-sm">
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

@endsection