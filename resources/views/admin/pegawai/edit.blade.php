@extends('layouts.app')

@section('content')

<div class="dashboard">
    <div class="container-fluid p-4">

        <h2>Edit Akun Pegawai</h2>

        <p class="text-muted">
            Ubah informasi akun pegawai yang terdaftar pada sistem SIMANTRA.
        </p>

        <div class="card p-4 mt-4">

            <form method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">NIP</label>
                    <input
                        type="text"
                        class="form-control"
                        value="1987654321">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Pegawai</label>
                    <input
                        type="text"
                        class="form-control"
                        value="Admin BPS">
                </div>

                <div class="mb-3">
                    <label class="form-label">No. HP</label>
                    <input
                        type="text"
                        class="form-control"
                        value="081234567890">
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input
                        type="file"
                        class="form-control">

                    <small class="text-muted">
                        Kosongkan jika foto tidak ingin diubah.
                    </small>
                </div>

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input
                        type="text"
                        class="form-control"
                        value="admin">
                </div>

                <div class="mb-3">
                    <label class="form-label">Role</label>

                    <select class="form-select">

                        <option>Admin</option>

                        <option>Operator</option>

                    </select>

                </div>

                <div class="mb-3">
                    <label class="form-label">Bidang</label>

                    <select class="form-select">

                        <option>Tata Usaha</option>
                        <option>Sosial</option>
                        <option>Nerwilis</option>
                        <option>Distribusi</option>
                        <option>IPDS</option>
                        <option>Produksi</option>

                    </select>

                </div>

                <div class="mt-4">

                    <button
                        type="submit"
                        class="btn btn-primary">

                        <i class="bi bi-check-circle me-1"></i>
                        Simpan Perubahan

                    </button>

                    <a
                        href="/pegawai"
                        class="btn btn-secondary">

                        <i class="bi bi-arrow-left me-1"></i>
                        Kembali

                    </a>

                </div>

            </form>

        </div>

    </div>
</div>

@endsection