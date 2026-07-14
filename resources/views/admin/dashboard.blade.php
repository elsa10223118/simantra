@extends('layouts.app')

@section('content')

<div class="dashboard">
    <div class="row g-0">

        <!-- SIDEBAR -->
        <div class="col-md-4 col-lg-3 sidebar-admin text-white p-4">

            <h4 class="fw-bold mb-4">
                SIMANTRA
            </h4>

            <ul class="nav flex-column">

                <li class="nav-item mb-2">
                    <a href="#" class="nav-link">
                        <i class="bi bi-house-door-fill me-2"></i>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="/pegawai" class="nav-link">
                        <i class="bi bi-person-fill me-2"></i>
                        Kelola Akun Pegawai
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="/mitra" class="nav-link">
                        <i class="bi bi-people-fill me-2"></i>
                        Data Mitra
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="/mata-anggaran" class="nav-link">
                        <i class="bi bi-cash-coin me-2"></i>
                        Mata Anggaran
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="/tahun" class="nav-link">
                        <i class="bi bi-calendar-event me-2"></i>
                        Tahun
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="/transaksi" class="nav-link">
                        <i class="bi bi-receipt me-2"></i>
                        Transaksi
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="/laporan" class="nav-link">
                        <i class="bi bi-bar-chart-fill me-2"></i>
                        Laporan
                    </a>
                </li>

                <li class="nav-item mt-4">
                    <a href="#" class="nav-link text-danger">
                        <i class="bi bi-box-arrow-right me-2"></i>
                        Logout
                    </a>
                </li>

            </ul>

        </div>


        <!-- KONTEN UTAMA -->
        <div class="col-md-8 col-lg-9 p-4">

            <h2>
                Selamat Datang, Admin 👋
            </h2>

            <p class="text-muted">
                Dashboard Admin SIMANTRA
            </p>


            <div class="row mt-4">

                <!-- Total Operator -->
                <div class="col-md-3 mb-3">
                    <div class="card p-4">
                        <i class="bi bi-person-vcard fs-2"></i>
                        <h6 class="mt-3">Total Operator</h6>
                        <h3 class="fw-bold">0</h3>
                    </div>
                </div>


                <!-- Total Mitra -->
                <div class="col-md-3 mb-3">
                    <div class="card p-4">
                        <i class="bi bi-people fs-2"></i>
                        <h6 class="mt-3">Total Mitra</h6>
                        <h3 class="fw-bold">0</h3>
                    </div>
                </div>


                <!-- Total Transaksi -->
                <div class="col-md-3 mb-3">
                    <div class="card p-4">
                        <i class="bi bi-receipt-cutoff fs-2"></i>
                        <h6 class="mt-3">Total Transaksi</h6>
                        <h3 class="fw-bold">0</h3>
                    </div>
                </div>


                <!-- Total Honor -->
                <div class="col-md-3 mb-3">
                    <div class="card p-4">
                        <i class="bi bi-wallet2 fs-2"></i>
                        <h6 class="mt-3">Total Honor</h6>
                        <h3 class="fw-bold">0</h3>
                    </div>
                </div>


            </div>

        </div>

    </div>
</div>

@endsection