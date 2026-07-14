@extends('layouts.app')

@section('content')

<div class="container-fluid p-4">

    <h2 class="fw-bold text-primary">Transaksi</h2>

    <p class="text-muted">
        Kelola dan pantau seluruh transaksi honor mitra yang diinput oleh operator.
    </p>

    <div class="card shadow-sm border-0 mt-4">

        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-3">

                <h5 class="fw-bold">Daftar Transaksi</h5>

                <a href="/transaksi/create" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Transaksi
                </a>

            </div>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle text-nowrap">

                    <thead class="table-light">

                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Nama Operator</th>
                            <th>Bidang</th>
                            <th>Nama Mitra</th>
                            <th>Kegiatan</th>
                            <th>Honor</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>2026</td>
                            <td>Elsa</td>
                            <td>Sosial</td>
                            <td>Budi Santoso</td>
                            <td>Pendataan Sosial Ekonomi</td>
                            <td>Rp150.000</td>
                            <td>
                                <span class="badge bg-success">
                                    Sudah Dibayar
                                </span>
                            </td>
                            <td>15 Juli 2026</td>
                            <td>
                                <button class="btn btn-warning btn-sm">
                                    Edit
                                </button>

                                <button class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection