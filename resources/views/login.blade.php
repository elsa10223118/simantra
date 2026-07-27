@extends('layouts.login')

@section('content')

<div class="login-page">

    <!-- Bagian Kiri -->
    <div class="login-left">

        <div class="welcome-content">

            <img src="{{ asset('images/simantra-logo.png') }}" class="logo-side" alt="Logo SIMANTRA">

            <h1>SIMANTRA</h1>

            <h5>Sistem Informasi Monitoring Alokasi Pekerjaan dan Honor Mitra</h5>

            <p>
                Selamat datang di Sistem Informasi Monitoring Alokasi Pekerjaan dan Honor Mitra.
                Silakan login menggunakan akun yang telah diberikan oleh Admin
                untuk mengakses sistem.
            </p>

        </div>

    </div>

    <!-- Bagian Kanan -->
    <div class="login-right">

        <div class="login-card">

            <div class="login-header">

                <img src="{{ asset('images/simantra-logo.png') }}" class="logo" alt="Logo">

                <h2 class="title">SIMANTRA</h2>

                <p class="subtitle">
                    Silakan masuk ke akun Anda
                </p>

            </div>

            <form action="{{ route('login') }}" method="POST">

    @csrf

    <!-- Role -->
    <div class="mb-2">

        <label class="form-label">Role</label>

        <div class="input-group">

            <span class="input-group-text">
                <i class="bi bi-people-fill"></i>
            </span>

            <select class="form-select" name="role" required>

                <option value="">Pilih Role</option>

                <option value="admin">Admin</option>

                <option value="operator">Operator</option>

            </select>

        </div>

    </div>

    <!-- Username -->
    <div class="mb-2">

        <label class="form-label">Username</label>

        <div class="input-group">

            <span class="input-group-text">
                <i class="bi bi-person-fill"></i>
            </span>

            <input
                type="text"
                name="username"
                class="form-control"
                placeholder="Masukkan Username"
                required>

        </div>

    </div>

    <!-- Password -->
    <div class="mb-3">

        <label class="form-label">Password</label>

        <div class="input-group">

            <span class="input-group-text">
                <i class="bi bi-lock-fill"></i>
            </span>

            <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Masukkan Password"
                required>

        </div>

    </div>

    <button type="submit" class="btn-login">

        <i class="bi bi-box-arrow-in-right me-2"></i>

        Masuk

    </button>

</form>

            <div class="forgot-password">
                <small>
                    <strong>Lupa Password?</strong><br> Silakan hubungi <strong>Admin</strong> untuk melakukan reset password.
                </small>
            </div>

            <p class="text-center text-muted mb-0 small">
                © {{ date('Y') }} SIMANTRA - BPS
            </p>

        </div>

    </div>

</div>

@endsection