@extends('layouts.app')

@section('content')

<div class="container-fluid p-4">

    <h2 class="fw-bold text-primary">Laporan</h2>

    <p class="text-muted">
        Lihat, filter, dan cetak laporan transaksi honor mitra.
    </p>

    <div class="card shadow-sm border-0 mt-4">

        <div class="card-body">

            <div class="row mb-4">

                <div class="col-md-3">
                    <label class="form-label">Tahun</label>
                    <select class="form-select">
                        <option selected>Semua Tahun</option>
                        <option>2026</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Bidang</label>
                    <select class="form-select">
                        <option selected>Semua Bidang</option>
                        <option>Tata Usaha</option>
                        <option>Sosial</option>
                        <option>Nerwilis</option>
                        <option>Distribusi</option>
                        <option>IPDS</option>
                        <option>Produksi</option>
                    </select>
                </div>

                <div class="col-md-6 d-flex align-items-end justify-content-end">

                    <button class="btn btn-success me-2">
                        <i class="bi bi-search"></i>
                        Tampilkan
                    </button>

                    <button class="btn btn-danger me-2">
                        <i class="bi bi-file-earmark-pdf"></i>
                        PDF
                    </button>

                    <button class="btn btn-success">
                        <i class="bi bi-file-earmark-excel"></i>
                        Excel
                    </button>

                </div>

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
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection