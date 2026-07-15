@extends('layouts.app')

@section('content')

<div class="container-fluid py-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold text-primary">
                <i class="bi bi-cash-stack me-2"></i> SBML
            </h2>
            <p class="text-muted mb-0">
                Monitoring Standar Biaya Masukan Lokal
            </p>
        </div>

        <a href="/sbml/create" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i>
            Tambah SBML
        </a>
    </div>

    <!-- Filter -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">

            <div class="row g-3">

                <div class="col-md-4">
                    <label class="form-label fw-semibold">
                        Filter Tahun
                    </label>

                    <select class="form-select">
                        <option selected>2026</option>
                        <option>2025</option>
                        <option>2024</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label fw-semibold">
                        Filter Bulan
                    </label>

                    <select class="form-select">
                        <option>Semua Bulan</option>
                        <option>Januari</option>
                        <option>Februari</option>
                        <option>Maret</option>
                        <option>April</option>
                        <option>Mei</option>
                        <option>Juni</option>
                        <option>Juli</option>
                        <option>Agustus</option>
                        <option>September</option>
                        <option>Oktober</option>
                        <option>November</option>
                        <option>Desember</option>
                    </select>
                </div>

                <div class="col-md-4 d-flex align-items-end">
                    <button class="btn btn-primary">
                        <i class="bi bi-search me-1"></i>
                        Tampilkan
                    </button>
                </div>

            </div>

        </div>
    </div>

    <!-- Informasi SBML -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">

            <h6 class="text-muted mb-2">
                Batas Maksimal Honor Tahun 2026
            </h6>

            <h4 class="fw-bold text-primary mb-0">
                Rp1.500.000
            </h4>

        </div>
    </div>

    <!-- Tabel Monitoring -->
    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-primary text-center">

                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Operator</th>
                            <th>Bidang</th>
                            <th>Nama Mitra</th>
                            <th>Kegiatan</th>
                            <th>Honor</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>2026</td>
                            <td>Elsa</td>
                            <td>Sosial</td>
                            <td>Budi</td>
                            <td>PSE</td>
                            <td>Rp500.000</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>2026</td>
                            <td>Elsa</td>
                            <td>Sosial</td>
                            <td>Asep</td>
                            <td>PSE</td>
                            <td>Rp450.000</td>
                        </tr>

                        <!-- TOTAL HONOR -->
                        <tr class="table-success fw-bold">

                            <td colspan="6" class="text-end">
                                TOTAL HONOR
                            </td>

                            <td>
                                Rp950.000
                            </td>

                        </tr>

                        {{--
                        Jika Total Honor melebihi SBML,
                        backend tinggal mengganti menjadi:

                        <tr class="table-danger fw-bold">
                            <td colspan="6" class="text-end">
                                TOTAL HONOR
                            </td>
                            <td>
                                Rp1.700.000
                            </td>
                        </tr>

                        Jadi seluruh baris otomatis berubah menjadi merah.
                        --}}

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection