@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 bg-primary text-white vh-100 p-4">

            <h4 class="fw-bold mb-4">SIMANTRA</h4>

            <ul class="nav flex-column">

                <li class="nav-item mb-2">
                    <a href="/operator/dashboard" class="nav-link text-white">
                        <i class="bi bi-house-door me-2"></i>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="/operator/mitra" class="nav-link text-white">
                        <i class="bi bi-people me-2"></i>
                        Data Mitra
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="/operator/transaksi" class="nav-link text-white">
                        <i class="bi bi-receipt me-2"></i>
                        Transaksi
                    </a>
                </li>

                <li class="nav-item mt-4">
                    <a href="/" class="nav-link text-white">
                        <i class="bi bi-box-arrow-right me-2"></i>
                        Logout
                    </a>
                </li>

            </ul>

        </div>

        <!-- Content -->
        <div class="col-md-9 col-lg-10 p-4">

            <h2 class="fw-bold text-primary">Dashboard Operator</h2>

            <p class="text-muted">
                Selamat datang di Sistem Informasi Monitoring Alokasi Pekerjaan dan Honor Mitra (SIMANTRA).
            </p>

            <!-- Informasi Akun -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">

                    <h5 class="fw-bold text-primary mb-4">
                        <i class="bi bi-person-circle me-2"></i>
                        Informasi Akun
                    </h5>

                    <div class="row align-items-center">

                        <!-- Foto Operator -->
                        <div class="col-md-3 text-center">
                            <img src="{{ asset('images/default-user.png') }}"
                                 alt="Foto Operator"
                                 class="rounded-circle border shadow"
                                 width="120"
                                 height="120"
                                 style="object-fit: cover;">
                        </div>

                        <!-- Data Operator -->
                        <div class="col-md-9">

                            <table class="table table-borderless mb-0">

                                <tr>
                                    <td width="180"><strong>Nama Operator</strong></td>
                                    <td>: [Nama Operator]</td>
                                </tr>

                                <tr>
                                    <td><strong>Role</strong></td>
                                    <td>: Operator</td>
                                </tr>

                                <tr>
                                    <td><strong>Bidang</strong></td>
                                    <td>: [Bidang]</td>
                                </tr>

                            </table>

                        </div>

                    </div>

                </div>
            </div>

            <div class="row">

                <div class="col-md-6 mb-4">

                    <div class="card shadow-sm border-0 h-100">

                        <div class="card-body">

                            <h5 class="fw-bold text-primary">
                                <i class="bi bi-people me-2"></i>
                                Data Mitra
                            </h5>

                            <p class="text-muted">
                                Operator hanya dapat melihat data mitra yang tersedia.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 mb-4">

                    <div class="card shadow-sm border-0 h-100">

                        <div class="card-body">

                            <h5 class="fw-bold text-primary">
                                <i class="bi bi-receipt me-2"></i>
                                Transaksi
                            </h5>

                            <p class="text-muted">
                                Operator dapat menginput data transaksi sesuai kegiatan.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

@endsection